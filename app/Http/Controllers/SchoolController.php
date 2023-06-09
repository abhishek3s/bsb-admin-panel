<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolAffiliation;
use Illuminate\Support\Facades\Storage;
use Webklex\PDFMerger\Facades\PDFMergerFacade as PDFMerger;
use PDF;

class SchoolController extends Controller
{
    
    //Fetch all online affiliation school
    public function getOnlineAffiliationSchoolList()
    {
        $schoolAffiliations = SchoolAffiliation::get();
        return view('school.index',compact('schoolAffiliations'));
    }

    //Get school detail by School ID
    public function show($id)
    {
        $schoolAffiliation = SchoolAffiliation::where('school_affiliation_id',$id)->first();
        
        if(empty($schoolAffiliation))
        {
            return redirect()->back()->with('error','School not Found');
        }
        // dd($schoolAffiliation);
        return view('school.view', compact('schoolAffiliation'));
    }

    //Get school detail by School ID
    public function getPdfFiles($id)
    {
        try {
        
            $schoolAffiliationPdfFiles = SchoolAffiliation::
                                select(['objection_certificate_NOC','t_attachment','registration_attachment','members_list_attach','no_objection_certificate','manager_attach_report','not_profit',
                                'financial_aid_any_govt_attach','staff_detail_attach','wellness_teacher_counsellor_attachment','service_condition_attach','pay_scale_da_attach','period_confirm_probation_attach',
                                'land_documents','number_of_room_attach','playground_details_attach','amenities_attach','safe_drinking_water_attach','fire_safety_certificate','building_safety_certificate','total_no_of_book',
                                'budget_library_books','other_fees_attach','section_strength_attach','total_section_attach','total_teachers_excluding_attach','religious_education_attach','school_based_certificate','recording_assessment_attach',
                                'teachers_orientation_attach','functioning_building_attach','examination_results_attach','payment_reciept'])
                                ->where('school_affiliation_id',$id)->first()->toArray();
            

            $pdf = PDFMerger::init();
            $tempFileName = [];

            $schoolAffiliation = SchoolAffiliation::where('school_affiliation_id',$id)->first();

            $data = [
                'schoolAffiliation' => $schoolAffiliation
            ];

            $randonFileName = rand(111,999999)."_pdfFile.pdf";
            $pdfCreate = PDF::loadView('pdf.schoolAffiliation', $data);

            $pdfCreate->save(public_path('storage/'.$randonFileName));

            
            $path = Storage::disk('public')->path($randonFileName);

            $tempFileName[] = $randonFileName;

            $pdf->addPDF($path, 'all');

            foreach ($schoolAffiliationPdfFiles as $key => $value) {
                if(!empty($value))
                {
                    $pdfFile = config('constant.document_path').$value;
                    
                    
                    $randonFileName = rand(111,999999)."_".$key."_pdfFile.pdf";



                    if(pathinfo($pdfFile)['extension'] == "pdf")
                    {
                        $contents = file_get_contents($pdfFile);
                        $tempFileName[] = $randonFileName;
                        Storage::disk('public')->put($randonFileName, $contents);
                        $path = Storage::disk('public')->path($randonFileName);
                        // dd($path);
                        $pdf->addPDF($path, 'all');
                    }

                    //Check for word docx
                    if(pathinfo($pdfFile)['extension'] == "docx")
                    {
                        $randonDocFileName = rand(1111,99999)."_".$key."_docxFile.docx";
                        $contents = file_get_contents($pdfFile);

                        Storage::disk('public')->put($randonDocFileName, $contents);

                        $path = Storage::disk('public')->path($randonDocFileName);

                        $domPdfPath = base_path('vendor/dompdf/dompdf');
                        \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
                        \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF'); 
                        $Content = \PhpOffice\PhpWord\IOFactory::load($path); 
                        $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
                        
                        $PDFWriter->save(public_path('storage/'.$randonFileName));
                        $tempFileName[] = $randonFileName;
                        $pathPdf = Storage::disk('public')->path($randonFileName);
                        Storage::disk('public')->delete($randonDocFileName);
                        
                        $pdf->addPDF($pathPdf, 'all');
                    } 


                }
            }
            
            $fileName = $schoolAffiliation->school_name.'_'.time().'_docuemnts.pdf';
            $pdf->merge();
            $pdf->save(public_path('storage/'.$fileName));

            Storage::disk('public')->delete($tempFileName);

            return response()->download(public_path('storage/'.$fileName))->deleteFileAfterSend(true);

        } catch (\Throwable $th) {
            Storage::disk('public')->delete($tempFileName);
            return redirect()->back()->with('error', $th->getMessage());
            //throw $th;
        }
    }
}
