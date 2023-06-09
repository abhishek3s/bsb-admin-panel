<!DOCTYPE html>
<html>

<head>
    <title>School Affiliation Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            font-size: 13px;
        }
        .table td, .table th {
            padding: 0.5rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <legend class="text-primary h5">A. General</legend>
        <table class="table" border="1">
            <tr>
                <td>
                    <label for="">1. School Name with Complete Address</label>
                    <p>[ As mentioned in No Objection
                        Certificate (NOC)
                        issued by the State/ U.T. ]</p>
                    
                </td>
                <td>
                    {{$schoolAffiliation->school_name}} <br>
                    {{$schoolAffiliation->school_address_line1}} <br>
                    {{$schoolAffiliation->school_address_line2}} <br>
                    {{$schoolAffiliation->school_state}} {{$schoolAffiliation->school_district}} {{ $schoolAffiliation->city }} <br>
                    {{ $schoolAffiliation->school_pincode }} <br>
                    {{ $schoolAffiliation->school_tel_no }}, {{ $schoolAffiliation->school_mob_no }} <br>
                    {{$schoolAffiliation->school_email_id}}

                </td>
            </tr>
            <tr>
                <td>
                    <label>2. Year of School Establishment</label>
                </td>
                <td>
                    {{$schoolAffiliation->school_est_year}}
                </td>
            </tr>
            <tr>
                <td><label>3. Present status of the School</label></td>
                <td>{{ $schoolAffiliation->school_present_status }}</td>
            </tr>
            <tr>
                <td><label>4. Affiliation Applied For</label></td>
                <td>{{ $schoolAffiliation->affiliation_type }} </td>
            </tr>
            <tr>
                <td>
                    <label>5. Name of the Society/ Trust running the school with complete
                        address.</label>
                        <div class="form-text fw-bold">(Attach a copy of the Memorandum of
                                                        Association
                                                        bearing its registration number and giving the particulars of the
                                                        members of the
                                                        Society/ Trustees)</div>
                </td>
                <td>{{ $schoolAffiliation->trust_name }}
                    <div id="t_attachment">
                        @if (!empty($schoolAffiliation->t_attachment))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->t_attachment }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div></td>
            </tr>
            <tr>
                <td><label>6. Date up to which the Registration of the Society / Trust is
                    valid. Attach
                    certificate of Registration</label></td>
                <td>{{ $schoolAffiliation->trust_validity }}
                    <div id="registration_attachment">
                        @if (!empty($schoolAffiliation->registration_attachment))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->registration_attachment }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td><label>7. Whether the school has a duly constituted School Managing Committee as per the regulations of the State/ U.T. in which the school is situated or Affiliation Bye – Laws of BSB?</label></td>
                <td>{{$schoolAffiliation->duly_constituted}}</td>
            </tr>
            <tr>
                <td>
                    <label>8. Complete list of the members of the Managing
                        Committee with full Particulars including name,
                        address, occupation, designation, term of
                        membership.
                    </label>
                </td>
                <td>
                    <div id="members_list_attach">
                        @if (!empty($schoolAffiliation->members_list_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->members_list_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>9. Has the school obtained a ‘No Objection
                        Certificate’ from the competent authority of the
                        State/U.T. for grant of affiliation of the school to
                        BSB? If yes, Enclose the copy of the same.
                    </label>
                </td>
                <td>
                    {{ $schoolAffiliation->no_objection }}
                    <div id="no_objection_certificate">
                        @if (!empty($schoolAffiliation->no_objection_certificate))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->no_objection_certificate }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>10. Submit evidence to the effect that the school is not being
                        run on
                        commercial lines? A copy of each of the latest balance sheet duly
                        signed by the
                        auditors, school prospectus, if any, fee structure, income &amp;
                        expenditure account
                        etc. duly signed by the Head of the Institution / Manager be
                        attached with the
                        report. </label>
                </td>
                <td>
                    <div id="manager_attach_report">
                        @if (!empty($schoolAffiliation->manager_attach_report))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->manager_attach_report }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>11. Attach an affidavit duly signed by the notary to the effect
                        that the
                        Society/ Trust running the school is non-proprietary and not Profit
                        making in
                        Character?</label>
                </td>
                <td>
                    <div id="not_profit">
                        @if (!empty($schoolAffiliation->not_profit))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->not_profit }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>12. Whether the school is receiving financial aid from any Govt.
                        / Semi Govt.
                        / Autonomous / Corporate Body under CSR. If so, details
                        thereof.</label>
                </td>
                <td>
                    {{ $schoolAffiliation->financial_aid_any_govt }}
                    <div id="financial_aid_any_govt_attach">
                        @if (!empty($schoolAffiliation->financial_aid_any_govt_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->financial_aid_any_govt_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>


        </table>

        <br><br><br>
        <legend class="text-primary h5">B. Staff / Qualifications, &amp; Service
            Conditions</legend>
        <table class="table" border="1">
            <tr>
                <td>
                    <label>1. (i) The number of teachers including Librarian, PTI and
                        Principal in
                        position (Regular, Adhoc or Part – time)</label>
                </td>
            </tr>
        </table>
        <table class="table" border="1">
            <tbody>
                <tr>
                    <th>S.No.</th>
                    <th width="150px">Staff Type</th>
                    <th>Regular</th>
                    <th>Adhoc</th>
                    <th>Part Time</th>
                    <th>Trained</th>
                    <th>Untrained</th>
                </tr>
                <tr>
                    <td>A.</td>
                    <td>Principal</td>
                    @php
                        $principle_stats = json_decode($schoolAffiliation->principle_stats, true, JSON_FORCE_OBJECT);
                        $ntt_stats = json_decode($schoolAffiliation->ntt_stats, true, JSON_FORCE_OBJECT);
                        $prt_stats = json_decode($schoolAffiliation->prt_stats, true, JSON_FORCE_OBJECT);
                        $tgt_stats = json_decode($schoolAffiliation->tgt_stats, true, JSON_FORCE_OBJECT);
                        $pgt_stats = json_decode($schoolAffiliation->pgt_stats, true, JSON_FORCE_OBJECT);
                        $librarian_stats = json_decode($schoolAffiliation->librarian_stats, true, JSON_FORCE_OBJECT);
                        $pti_stats = json_decode($schoolAffiliation->pti_stats, true, JSON_FORCE_OBJECT);
                        $total_stats = json_decode($schoolAffiliation->total_stats, true, JSON_FORCE_OBJECT);
                        $materials_available = json_decode($schoolAffiliation->materials_available, true, JSON_FORCE_OBJECT);
                        $clubs = json_decode($schoolAffiliation->clubs, true, JSON_FORCE_OBJECT);
                        $syllabus_follow = json_decode($schoolAffiliation->syllabus_follow, true, JSON_FORCE_OBJECT);
                    @endphp

                    <td>
                        {{ isset($principle_stats[0]) ? $principle_stats[0] : '' }}
                    </td>
                    <td>
                        {{ isset($principle_stats[1]) ? $principle_stats[1] : '' }}
                    </td>
                    <td>
                        {{ isset($principle_stats[2]) ? $principle_stats[2] : '' }}
                    </td>
                    <td>
                        {{ isset($principle_stats[3]) ? $principle_stats[3] : '' }}
                    </td>
                    <td>
                        {{ isset($principle_stats[4]) ? $principle_stats[4] : '' }}
                    </td>
                </tr>
                <tr>
                    <td>B.</td>
                    <td>NTTs</td>
                    <td>
                        {{ isset($ntt_stats[0]) ? $ntt_stats[0] : '' }}
                    </td>
                    <td>
                        {{ isset($ntt_stats[1]) ? $ntt_stats[1] : '' }}
                    </td>
                    <td>
                        {{ isset($ntt_stats[2]) ? $ntt_stats[2] : '' }}
                    </td>
                    <td>
                        {{ isset($ntt_stats[3]) ? $ntt_stats[3] : '' }}
                    </td>
                    <td>
                        {{ isset($ntt_stats[4]) ? $ntt_stats[4] : '' }}
                    </td>
                </tr>
                <tr>
                    <td>C.</td>
                    <td>PRTs</td>
                    <td>
                        {{ isset($prt_stats[0]) ? $prt_stats[0] : '' }}
                    </td>
                    <td>
                        {{ isset($prt_stats[1]) ? $prt_stats[1] : '' }}
                    </td>
                    <td>
                        {{ isset($prt_stats[2]) ? $prt_stats[2] : '' }}
                    </td>
                    <td>
                        {{ isset($prt_stats[3]) ? $prt_stats[3] : '' }}
                    </td>
                    <td>
                        {{ isset($prt_stats[4]) ? $prt_stats[4] : '' }}
                    </td>
                </tr>
                <tr>
                    <td>D.</td>
                    <td>TGTs</td>
                    <td>
                        {{ isset($tgt_stats[0]) ? $tgt_stats[0] : '' }}
                    </td>
                    <td>
                        {{ isset($tgt_stats[1]) ? $tgt_stats[1] : '' }}
                    </td>
                    <td>
                        {{ isset($tgt_stats[2]) ? $tgt_stats[2] : '' }}
                    </td>
                    <td>
                        {{ isset($tgt_stats[3]) ? $tgt_stats[3] : '' }}
                    </td>
                    <td>
                        {{ isset($tgt_stats[4]) ? $tgt_stats[4] : '' }}
                    </td>
                </tr>
                <tr>
                    <td>E.</td>
                    <td>PGT</td>
                    <td>
                        {{ isset($pgt_stats[0]) ? $pgt_stats[0] : '' }}
                    </td>
                    <td>
                        {{ isset($pgt_stats[1]) ? $pgt_stats[1] : '' }}
                    </td>
                    <td>
                        {{ isset($pgt_stats[2]) ? $pgt_stats[2] : '' }}
                    </td>
                    <td>
                        {{ isset($pgt_stats[3]) ? $pgt_stats[3] : '' }}
                    </td>
                    <td>
                        {{ isset($pgt_stats[4]) ? $pgt_stats[4] : '' }}
                    </td>
                </tr>
                <tr>
                    <td>F.</td>
                    <td>Librarian</td>
                    <td>
                        {{ isset($librarian_stats[0]) ? $librarian_stats[0] : '' }}
                    </td>
                    <td>
                        {{ isset($librarian_stats[1]) ? $librarian_stats[1] : '' }}
                    </td>
                    <td>
                        {{ isset($librarian_stats[2]) ? $librarian_stats[2] : '' }}
                    </td>
                    <td>
                        {{ isset($librarian_stats[3]) ? $librarian_stats[3] : '' }}
                    </td>
                    <td>
                        {{ isset($librarian_stats[4]) ? $librarian_stats[4] : '' }}
                    </td>
                </tr>
                <tr>
                    <td>G.</td>
                    <td>PTI</td>
                    <td>
                        {{ isset($pti_stats[0]) ? $pti_stats[0] : '' }}
                    </td>
                    <td>
                        {{ isset($pti_stats[1]) ? $pti_stats[1] : '' }}
                    </td>
                    <td>
                        {{ isset($pti_stats[2]) ? $pti_stats[2] : '' }}
                    </td>
                    <td>
                        {{ isset($pti_stats[3]) ? $pti_stats[3] : '' }}
                    </td>
                    <td>
                        {{ isset($pti_stats[4]) ? $pti_stats[4] : '' }}
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Total</td>
                    <td>
                        {{ isset($total_stats[0]) ? $total_stats[0] : '' }}
                    </td>
                    <td>
                        {{ isset($total_stats[1]) ? $total_stats[1] : '' }}
                    </td>
                    <td>
                        {{ isset($total_stats[2]) ? $total_stats[2] : '' }}
                    </td>
                    <td>
                        {{ isset($total_stats[3]) ? $total_stats[3] : '' }}
                    </td>
                    <td>
                        {{ isset($total_stats[4]) ? $total_stats[4] : '' }}
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table" border="1">
            <tr>
                <td>
                    <label>(ii) The no. of trained and untrained teachers</label>
                </td>
                <td>
                    {{ $schoolAffiliation->trained_teachers }}, {{$schoolAffiliation->untrained_teachers}}
                </td>
            </tr>
            <tr>
                <td><label>2. The name of the principal, teachers, designation,
                    qualifications, subjects
                    studied at graduation/ post-graduation level, classes and subjects
                    they are
                    teaching. Date of appointment, Date of confirmation, pay
                    scale.</label>
                    <p>
                        (Annex fairly typed staff statement with
                                                        all above
                                                        details)
                    </p>
                </td>
                <td>
                    <div id="staff_detail_attach">
                        @if (!empty($schoolAffiliation->staff_detail_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->staff_detail_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>(i) Whether the school has appointed Wellness Teacher
                        (Counsellor)? If so,
                        mention particulars</label>
                </td>
                <td>
                    {{ $schoolAffiliation->wellness_teacher_counsellor }}
                    <div id="wellness_teacher_counsellor_attachment">
                        @if (!empty($schoolAffiliation->wellness_teacher_counsellor_attachment))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->wellness_teacher_counsellor_attachment }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>3. Are the service conditions defined? If so, are the services
                        conditions in
                        accordance with those of the centre State/ U.T.</label>
                </td>
                <td>
                    {{ $schoolAffiliation->service_condition }}
                    <div id="service_condition_attach">
                        @if (!empty($schoolAffiliation->service_condition_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->service_condition_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>4. Whether the pay scales being followed as per State Govt. U.T.
                        or Central
                        Govt. with Pay Scale and rate of D.A. may be mentioned.</label>
                </td>
                <td>
                    {{ $schoolAffiliation->pay_scale_da }}
                    <div id="pay_scale_da_attach">
                        @if (!empty($schoolAffiliation->pay_scale_da_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->pay_scale_da_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>5. The other allowances as extended to the employees of the
                        State/ U.T. and
                        Central Govt. are being paid?</label>
                </td>
                <td>
                    {{ $schoolAffiliation->other_allowance }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>6. Any other benefit such as GPF/CPF/EPF earned leave etc. may be
                        indicated.</label>
                </td>
                <td>
                    {{ $schoolAffiliation->gpf_cpf_earned_leave}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>7. Whether service book and Personal files are
                        maintained?</label>
                </td>
                <td>
                    {{$schoolAffiliation->maintained_files}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>8. The period of probation and number of teachers confirmed and
                        on
                        probation.</label>
                </td>
                <td>
                    <div id="period_confirm_probation_attach">
                        @if (!empty($schoolAffiliation->period_confirm_probation_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->period_confirm_probation_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>9. Whether the payment of salary to the staff is made by cheque
                        or cash or
                        through Bank account transfer
                        Give details.
                    </label>
                </td>
                <td>
                    {{$schoolAffiliation->salary_to_the_staff}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>10. If salary is not paid through Bank account transfer,
                        reasons.</label>
                </td>
                <td>
                    {{$schoolAffiliation->salary_is_not_paid}}
                </td>
            </tr>
        </table>
<br><br><br>
        <label class="text-primary h5">A. Campus &amp; Building</label>
        <table class="table" border="1">
            <tr>
                <td>
                    <label>1. (i) Campus area both in Sq. Mtr and Hect.</label>
                    <p>(at site from where the school is
                        presently running)</p>
                </td>
                <td>
                    {{$schoolAffiliation->campus_area_sq}}
                </td>
            </tr>
            <tr>
                <td>
                    <label class="mx-3">(ii) Build area in Sq. Mtr</label>
                </td>
                <td>
                    {{$schoolAffiliation->built_up_area}}
                </td>
            </tr>
            <tr>
                <td>
                    <label class="mx-3">(iii) State the location of the school
                        site</label>
                </td>
                <td>
                    {{$schoolAffiliation->school_site_states}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>2. What is the ownership status?
                        Whether the campus area and property Constructed over it belongs to
                        the
                        Society/School? If on lease, for how many years?
                    </label>
                </td>
                <td>
                    {{$schoolAffiliation->ownership_status}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>3. If there are more than one land documents, indicate whether
                        the plots are
                        contiguous? </label>
                </td>
                <td>
                    {{$schoolAffiliation->plots_contiguous}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>4. Enclose a certified copy of complete Registered land
                        document(s) and land
                        Certificate, completely filled in and issued by a Revenue/
                        Registering authority
                        has been obtained from school and enclosed with Inspection Report
                    </label>
                </td>
                <td>
                    <div id="land_documents">
                        @if (!empty($schoolAffiliation->land_documents))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->land_documents }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>5. Whether the school is housed in a pucca building? If not,
                        whether it
                        consists of tin sheds, asbestos sheets, tents, khaparails, mud –
                        huts etc.? If
                        so, give details of the area, date of construction, approximate life
                        span of
                        structure, the details of facilities such as electricity ceiling
                        fans, exhaust
                        fans, etc. If the school building consists of khaparails, asbestos
                        sheets, is it
                        situated in a hilly/ tribal area? </label>
                </td>
                <td>
                    {{$schoolAffiliation->school_pucca_building}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>6. Infrastructure details the total number of rooms available in
                        the school
                        Number of rooms, other than Class – rooms for Administrations &amp;
                        Co-curricular
                        activities.</label>
                        <p>(i.e., Lab, Library, Staff Room etc.)</p>
                </td>
                <td>
                    <div id="number_of_room_attach">
                        @if (!empty($schoolAffiliation->number_of_room_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->number_of_room_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>7. Whether the class – rooms are adequate to meet the
                        requirements of the
                        students/ subject teachers/ co–curricular activities? </label>
                </td>
                <td>
                    {{$schoolAffiliation->co_curricular_activities}}
                </td>
            </tr>
        </table>
<br><br><br><br><br>
        <legend class="text-primary h5">B. Playground</legend>
        <table class="table" border="1">
            <tr>
                <td>
                    <label>1. Size of Playground and details of Games/ Sports/ Co-curricular
                        activities
                        for which facilities are available</label>
                </td>
                <td>
                    <div id="playground_details_attach">
                        @if (!empty($schoolAffiliation->playground_details_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->playground_details_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>2. If the playground(s) is not a part of the school campus, is it
                        easily
                        accessible to students?</label>
                </td>
                <td>
                    {{$schoolAffiliation->playground_part}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>3. Attach a PDF file of School Photographs with all amenities
                        like
                        playground, toilets, and school top-view, etc.</label>
                </td>
                <td>
                    <div id="amenities_attach">
                        @if (!empty($schoolAffiliation->amenities_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->amenities_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
        </table>

        <br><br>
        <legend class="text-primary h5">C. Physical and Health, Fire, Drinking Water
            Certificates
        </legend>
        <label>1. Whether Health, Fire Safety, Safe Drinking water, Building
            safety
            Certificates have been obtained from the concerned departments?
        </label>
        <table class="table" border="1">
            <tr>
                <td>
                    <label class="px-3">A. Safe Drinking Water, Health and
                        Sanitation
                        Certificate.</label>
                        <br>
                        <label class="px-5">I. Issuing Authority</label>
                        <br>
                        <label class="px-5">II. Valid Up to</label>
                </td>
                <td>
                    <div id="safe_drinking_water_attach">
                        @if (!empty($schoolAffiliation->safe_drinking_water_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->safe_drinking_water_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                        <br>
                        {{$schoolAffiliation->water_issuing_authority}} <br>
                        {{$schoolAffiliation->water_valid_up_to}}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="px-3">B. Fire Certificate</label>
                    <br>
                    <label class="px-5">I. Issuing Authority</label>
                    <br>
                    <label class="px-5">II. Valid Up to</label>
                </td>
                <td>
                    <div id="fire_safety_certificate">
                        @if (!empty($schoolAffiliation->fire_safety_certificate))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->fire_safety_certificate }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                        <br>
                        {{$schoolAffiliation->fire_issuing_authority}} <br>
                        {{$schoolAffiliation->fire_valid_up_to}}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="px-3">C. Building Safety</label>
                    <br>
                    <label class="px-5">I. Issuing Authority</label>
                </td>
                <td>
                    <div id="building_safety_certificate">
                        @if (!empty($schoolAffiliation->building_safety_certificate))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->building_safety_certificate }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                    <br>
                    {{ $schoolAffiliation->bullding_issuing_authority }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>2. Whether facilities as per (1) above are satisfactory.</label>
                </td>
                <td>
                    {{ $schoolAffiliation->whether_facilities}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>3. No. of toilets available.</label>
                </td>
                <td>
                    <table border="1">
                        <tr>
                            <td><b>Boys</b></td>
                            <td><b>Girls</b></td>
                            <td><b>Staff</b></td>
                        </tr>
                        <tr>
                            <td>{{ $schoolAffiliation->no_toilets_boys}}</td>
                            <td>{{ $schoolAffiliation->no_toilets_girls}}</td>
                            <td>{{ $schoolAffiliation->no_toilets_staff}}</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <label>4. No. of water taps available.</label>
                </td>
                <td>
                    <table border="1">
                        <tr>
                            <td><b>Boys</b></td>
                            <td><b>Girls</b></td>
                            <td><b>Staff</b></td>
                        </tr>
                        <tr>
                            <td>{{ $schoolAffiliation->no_water_taps_boys}}</td>
                            <td>{{ $schoolAffiliation->no_water_taps_girls}}</td>
                            <td>{{ $schoolAffiliation->no_water_taps_stuff}}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
<br><br>
        <legend class="text-primary h5">D. Library / Furniture / Books etc.</legend>
        <table>
            <tr>
                <td>
                    <label>1. Particulars of the Librarian and other library staff</label>
                </td>
                <td>
                    {{$schoolAffiliation->particulars_librarian}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>2. Size of the Library</label>
                </td>
                <td>
                    {{$schoolAffiliation->library_siz_sq}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>3. Whether the library has a reading room for the students/
                        teachers?</label>
                </td>
                <td>
                    {{$schoolAffiliation->library_reading_room}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>4. Whether furniture provided is sufficient to meet the present/
                        future
                        requirements?</label>
                </td>
                <td>
                    {{$schoolAffiliation->furniture_sufficient}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>5. Total number of books. Subject wise detail of books.</label>
                    <p>(List of books not to be annexed).</p>
                </td>
                <td>
                    <div id="total_no_of_book">
                        @if (!empty($schoolAffiliation->total_no_of_book))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->total_no_of_book }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>6. Name of journals/ Periodical News – papers are being
                        subscribed.</label>
                </td>
                <td>
                    {{$schoolAffiliation->journals_name}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>7. Whether more books are needed to meet the present
                        requirements?</label>
                </td>
                <td>
                    {{$schoolAffiliation->book_present_requirements}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>8. Whether there is a separate reference section for the
                        staff?</label>
                </td>
                <td>
                    {{$schoolAffiliation->stuff_reference_section}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>9. Annual Budget for the Library Books/ Magazines, Newspapers
                        etc.</label>
                </td>
                <td>
                    <div id="budget_library_books">
                        @if (!empty($schoolAffiliation->budget_library_books))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->budget_library_books }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
        </table>

        <br><br>
        <legend class="text-primary h5">E. Laboratories</legend>
        <label>1. Details of laboratories</label>
        <table class="table" border="1">
            <tr>
                <th>S.No.</th>
                <th>Laboratory Type</th>
                <th>Number</th>
                <th>Size</th>
            </tr>
            <tr>
                <td>(i)</td>
                <td>Composite Science Lab</td>
                <td>{{ $schoolAffiliation->composite_science_lab }}
                </td>
                <td> {{ $schoolAffiliation->composite_science_size }}
                </td>
            </tr>
            <tr>
                <td>(ii)</td>
                <td>Physics</td>
                <td> {{ $schoolAffiliation->physics }}
                </td>
                <td> {{ $schoolAffiliation->physics_size }}
                </td>
            </tr>
            <tr>
                <td>(iii)</td>
                <td>Chemistry</td>
                <td>{{ $schoolAffiliation->chemistry }}
                </td>
                <td>{{ $schoolAffiliation->chemistry_size }}
                </td>
            </tr>
            <tr>
                <td>(iv)</td>
                <td>Biology</td>
                <td>{{ $schoolAffiliation->biology }}
                </td>
                <td>{{ $schoolAffiliation->biology_size }}
                </td>
            </tr>
            <tr>
                <td>(v)</td>
                <td>Computer Science</td>
                <td>{{ $schoolAffiliation->computer_science }}
                </td>
                <td>{{ $schoolAffiliation->computer_science_size }}
                </td>
            </tr>
            <tr>
                <td>(vi)</td>
                <td>Mathematics</td>
                <td>{{ $schoolAffiliation->mathematics }}
                </td>
                <td>{{ $schoolAffiliation->mathematics_size }}
                </td>
            </tr>
            <tr>
                <td>(vii)</td>
                <td>Others</td>
                <td>{{ $schoolAffiliation->others }}
                </td>
                <td>{{ $schoolAffiliation->others_size }}
                </td>
            </tr>    
        </table>

        <table class="table" border="1">
            <tr>
                <td>
                    <label>2. Whether each Lab has Sufficient equipment for practical work
                        as per BSB
                        norms applicable for the course for which the school has applied?
                    </label>
                </td>
                <td>
                    {{$schoolAffiliation->sufficient_equipment}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>3. (i) No. of computers available</label>
                </td>
                <td>
                    {{$schoolAffiliation->no_of_pc_available}}
                </td>
            </tr>
            <tr>
                <td>
                    <label class="mx-3">(ii) Ratio students per computer</label>
                </td>
                <td>
                    {{$schoolAffiliation->ratio_per_pc}}
                </td>
            </tr>
            <tr>
                <td>
                    <label class="mx-3">(iii) Whether Broad band Internet Connection
                        available in the
                        school</label>
                </td>
                <td>
                    {{$schoolAffiliation->net_conection_avalible}}
                </td>
            </tr>
        </table>

        <br>
        <legend class="text-primary h5">F. Income &amp; Expenditure Accounts</legend>
        <table class="table" border="1">
            <tr>
                <td>
                    <label>1. Main Source of Income</label>
                </td>
                <td>
                    {{$schoolAffiliation->main_Income_source}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>2. Tuition fee charged per month</label>
                </td>
                <td>
                    {{$schoolAffiliation->tuition_fee_per_month}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>3. Other fees, registration, cautions money etc. with
                        details</label>
                </td>
                <td>
                    <div id="other_fees_attach">
                        @if (!empty($schoolAffiliation->other_fees_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->other_fees_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>4. Building funds/ Development Charges, if any.</label>
                </td>
                <td>
                    {{$schoolAffiliation->building_funds}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>5. (a) Is the School maintain separate account other than
                        Society’s
                        account.?</label>
                    <label class="mx-3">(b) Whether the accounts of the school are
                        maintained properly
                        and regularly audited by the Regd. C.A./ checked by the Audit
                        department of the
                        State? </label>

                </td>
                <td>
                    {{$schoolAffiliation->if_separte_account}} <br>
                    {{$schoolAffiliation->school_account_maintained}}
                </td>
            </tr>
        </table>

        <br><br>
        <label class="text-primary h5">A. Academic</label>
        <table class="table" border="1">
            <tr>
                <td>
                    <label>1. Number of students</label>
                </td>
                <td>
                    <table border="1">
                        <tr>
                            <td><b>Boys</b></td>
                            <td><b>Girls</b></td>
                        </tr>
                        <tr>
                            <td>{{ $schoolAffiliation->no_student_boys }}</td>
                            <td>{{ $schoolAffiliation->no_student_girls }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td><label>2. Latest section–wise strength</label></td>
                <td>
                    <div id="section_strength_attach">
                        @if (!empty($schoolAffiliation->section_strength_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->section_strength_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>3. Total No. of Section</label>
                </td>
                <td>
                    <div id="total_section_attach">
                        @if (!empty($schoolAffiliation->total_section_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->total_section_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>4. Total No. of teachers excluding Principal, PTI and
                        Librarian</label>
                </td>
                <td>
                    <div id="total_teachers_excluding_attach">
                        @if (!empty($schoolAffiliation->total_teachers_excluding_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->total_teachers_excluding_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>5. Whether any religious education has been made compulsory in
                        the school? If so, details thereof</label>
                </td>
                <td>
                    {{$schoolAffiliation->religious_education}}
                    <div id="religious_education_attach">
                        @if (!empty($schoolAffiliation->religious_education_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->religious_education_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>6. (a) Are the materials available with the school (Tick the
                        boxes): </label>
                </td>
                <td>
                    {{$materials_available[0] == "Teachers Manual" ? "Teachers Manual" : ''}}
                    <br>
                    {{ $materials_available[1] == "Certificate for School Based Evaluation" ? 'Certificate for School Based Evaluation' : '' }}
                    <br>
                    {{ $materials_available[2] == "Report Card" ? 'Report Card' : '' }}
                    <br>
                    {{ $materials_available[3] == "Life Skills Manual" ? 'Life Skills Manual' : '' }}
                    <br>
                    {{ $materials_available[4] == "School Health Manuals" ? 'School Health Manuals' : '' }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>(b) Is the school providing a School Based certificate in the
                        following classes. Please attach copies </label>
                    <ol type="i">
                        <li>Pre – Primary</li>
                        <li>Class I to II</li>
                        <li>Class III to V</li>
                        <li>Class VI to VIII</li>
                    </ol>
                </td>
                <td>
                    {{$schoolAffiliation->school_based}}
                    <div id="school_based_certificate">
                        @if (!empty($schoolAffiliation->school_based_certificate))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->school_based_certificate }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>(c) In case of clubs, tick those which are
                        functioning in the school
                    </label>
                </td>
                <td>
                    {{ $clubs[0] == "Eco clubs" ? 'Eco clubs' : '' }} <br>
                    {{ $clubs[1] == "Health and Wellness Clubs" ? 'Health and Wellness Clubs' : '' }} <br>
                    {{ $clubs[2] == "Heritage Clubs" ? 'Heritage Clubs' : '' }} <br>
                    {{ $clubs[3] == "Integrity Clubs" ? 'Integrity Clubs' : '' }} <br>
                    {{ $clubs[4] == "Reading Clubs" ? 'Reading Clubs' : '' }} <br>
                    {{ $clubs[5] == "NCC/NSS" ? 'checked' : '' }} <br>
                    @if(!empty($schoolAffiliation->clubs_other))
                        {{$schoolAffiliation->clubs_other}}
                    @endif
                </td>
            </tr>
            <tr>
                <td>
                    <label>(d) Whether the facilities of formative assessment/ third
                        language teaching/ work experience/ PHE are available and their
                        record is being maintained? </label>
                </td>
                <td>
                    {{ $schoolAffiliation->facilities_of_formative }}
                </td>
            </tr>
            <tr>
                <td>
                    <label>7. Whether the syllabus prescribed by the Board is being
                        followed?</label> <br>
                        <label class="form-check-label mx-3">Pre - Primary</label> <br>
                        <label class="form-check-label mx-3">I - II</label> <br>
                        <label class="form-check-label mx-3">III - V</label> <br>
                        <label class="form-check-label mx-3">VI - VIII</label> <br>
                
                </td>
                <td>
                    {{$syllabus_follow[0]}} <br>
                    {{$syllabus_follow[1]}} <br>
                    {{$syllabus_follow[2]}} <br>
                    {{$syllabus_follow[3]}} <br>

                </td>
            </tr>
            <tr>
                <td>
                    <label>8. Record Keeping</label>
                    <label>1. (a) Recording of formative Assessment in all subjects
                        including types of tasks to be verified.</label>
                    <label>(b) Recording of formative Assessment in all subjects
                        including types of tasks to be verified.</label>

                    <label>(c) Comments on the quality of records such as Narrative
                        / Anectotal / Observation tools maintained by teachers.
                    </label>
                </td>
                <td>
                    <div id="recording_assessment_attach">
                        @if (!empty($schoolAffiliation->recording_assessment_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->recording_assessment_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                        <br>
                        {{$schoolAffiliation->recording_of_formative}}
                        <br>
                        {{$schoolAffiliation->comments_quality_of_records}}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>2. Whether the teachers are sent for in service
                        refresher/ re – orientation programmes to update their
                        knowledge and teaching skills? Is so, give details for the
                        last three years. </label>
                </td>
                <td>
                    <div id="teachers_orientation_attach">
                        @if (!empty($schoolAffiliation->teachers_orientation_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->teachers_orientation_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>3. Is the School facilities/ inclusive education of
                        Physically challenged. </label>
                </td>
                <td>
                    {{$schoolAffiliation->school_facilities_Physically_challenged}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>4. Is the school exclusively preparing candidates for BSB
                        or some classes of the other Board are functioning in the
                        same building? If so, details </label>
                </td>
                <td>
                    {{$schoolAffiliation->functioning_bulding}}
                    <div id="functioning_building_attach">
                        @if (!empty($schoolAffiliation->functioning_building_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->functioning_building_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>5. Results of the Board’s Examination(s) for the last
                        three years (if applicable)</label>
                </td>
                <td>
                    <div id="examination_results_attach">
                        @if (!empty($schoolAffiliation->examination_results_attach))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->examination_results_attach }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
        </table>

         <br><br>
        <label class="text-primary h5">B. Prospective Plans</label>
        <table class="table" border="1">
            <tr>
                <td>
                    <label>1. Whether the school is in a position to fulfil conditions for
                        expansion from Middle class syllabus/ Provisional affiliation up to
                        Secondary or Sr. Secondary Classes.</label>
                </td>
                <td>
                    {{$schoolAffiliation->prospective_plans}}
                </td>
            </tr>
        </table>

        <br><br><br><br>
        <label class="text-primary h5">Affiliation Fee Desposit Information</label>
        <table class="table" border="1">
            <tr>
                <td>
                    <label>Account Holder's Name</label>
                </td>
                <td>
                    {{$schoolAffiliation->account_holder}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Account Number</label>
                </td>
                <td>
                    {{$schoolAffiliation->account_number}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Bank Name</label>
                </td>
                <td>
                    {{$schoolAffiliation->bank_name}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>IFSC Code</label>
                </td>
                <td>
                    {{$schoolAffiliation->ifsc_code}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Mode of Payment</label>
                </td>
                <td>
                    {{$schoolAffiliation->payment_mode}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Transaction ID</label>
                </td>
                <td>
                    {{$schoolAffiliation->transaction_id}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Upload the payment reciept</label>
                </td>
                <td>
                    <div id="payment_reciept">
                        @if (!empty($schoolAffiliation->payment_reciept))
                            <a class="file-attach-info"
                                href="{{ config('constant.document_path') . $schoolAffiliation->payment_reciept }}"
                                target="_blank">
                                <i class="bx bx-check"></i> <small>File
                                    attached
                                    !</small>
                            </a>
                        @else
                            <small>File Not Attached!</small>
                        @endif
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Transaction Remarks, If any</label>
                </td>
                <td>
                    {{$schoolAffiliation->transaction_remarks}}
                </td>
            </tr>

        </table>


    </div>
</body>

</html>