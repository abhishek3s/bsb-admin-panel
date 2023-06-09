{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'School List')

@section('content_header')
    <h1>School Details</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">

                    {{-- Include error alert template --}}
                    @include('errors.error-message')

                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#part1" data-toggle="tab">Part - I</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#part2" data-toggle="tab">Part - II</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#part3" data-toggle="tab">Part - III</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#part4" data-toggle="tab">Payment
                                        Details</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="part1">
                                    <div class="card mb-5">
                                        <div class="p-3">
                                            <legend class="text-primary h5">A. General</legend>
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>1. School Name with Complete Address</label>
                                                    <div class="form-text fw-bold">[ As mentioned in No Objection
                                                        Certificate (NOC)
                                                        issued by the State/ U.T. ]</div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-2">
                                                                <input readonly type="text" class="form-control mb-2"
                                                                    name="school_name"
                                                                    value="{{ $schoolAffiliation->school_name }}"
                                                                    placeholder="School Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-2">
                                                                <input readonly type="text" class="form-control"
                                                                    name="school_address_line1"
                                                                    value="{{ $schoolAffiliation->school_address_line1 }}"
                                                                    placeholder="Address Line 1">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-2">
                                                                <input readonly type="text" class="form-control"
                                                                    name="school_address_line2"
                                                                    value="{{ $schoolAffiliation->school_address_line2 }}"
                                                                    placeholder="Address Line 2">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-2">

                                                                <input readonly type="text" class="form-control"
                                                                    name="school_state"
                                                                    value="{{ $schoolAffiliation->school_state }}"
                                                                    placeholder="state">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-2">
                                                                <input readonly type="text" class="form-control"
                                                                    name="school_district"
                                                                    value="{{ $schoolAffiliation->school_district }}"
                                                                    placeholder="school_district">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-2">
                                                                <input readonly type="text" class="form-control"
                                                                    name="city" value="{{ $schoolAffiliation->city }}"
                                                                    placeholder="City">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-2">
                                                                <input readonly type="text" class="form-control"
                                                                    name="school_pincode"
                                                                    value="{{ $schoolAffiliation->school_pincode }}"
                                                                    minlength="6" maxlength="6" placeholder="Pincode">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-2">
                                                                <input readonly type="text" class="form-control mb-2"
                                                                    name="school_tel_no"
                                                                    value="{{ $schoolAffiliation->school_tel_no }}"
                                                                    minlength="10" maxlength="10"
                                                                    placeholder="Tel. No. with STD Code">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-2">
                                                                <input readonly type="text" class="form-control mb-2"
                                                                    name="school_mob_no"
                                                                    value="{{ $schoolAffiliation->school_mob_no }}"
                                                                    minlength="10" maxlength="10"
                                                                    placeholder="Mobile No.">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-2">
                                                                <input readonly type="email" class="form-control mb-2"
                                                                    name="school_email_id"
                                                                    value="{{ $schoolAffiliation->school_email_id }}"
                                                                    placeholder="Email-id">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-2">
                                                                <div id="objection_certificate_NOC">
                                                                    @if (!empty($schoolAffiliation->objection_certificate_NOC))
                                                                        <a class="file-attach-info"
                                                                            href="{{ config('constant.document_path') . $schoolAffiliation->objection_certificate_NOC }}"
                                                                            target="_blank">
                                                                            <i class="bx bx-check"></i> <small>File
                                                                                attached
                                                                                !</small>
                                                                        </a>
                                                                    @else
                                                                        <small>File Not Attached!</small>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>2. Year of School Establishment</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="date" class="form-control"
                                                        name="school_est_year"
                                                        value="{{ $schoolAffiliation->school_est_year }}"
                                                        placeholder="Enter School Est. Year">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>3. Present status of the School</label>
                                                </div>
                                                <div class="col-lg-4">

                                                    <input readonly type="date" class="form-control"
                                                        name="school_est_year"
                                                        value="{{ $schoolAffiliation->school_present_status }}"
                                                        placeholder="school_present_status">
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>4. Affiliation Applied For</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="date" class="form-control"
                                                        name="affiliation_type"
                                                        value="{{ $schoolAffiliation->affiliation_type }}"
                                                        placeholder="affiliation_type">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>5. Name of the Society/ Trust running the school with complete
                                                        address.</label>
                                                    <div class="form-text fw-bold">(Attach a copy of the Memorandum of
                                                        Association
                                                        bearing its registration number and giving the particulars of the
                                                        members of the
                                                        Society/ Trustees)</div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control mb-2"
                                                        name="trust_name" value="{{ $schoolAffiliation->trust_name }}"
                                                        placeholder="Name of the Society / Trust">
                                                    <textarea readonly type="text" class="form-control mb-2" name="trust_address" placeholder="Complete Address"
                                                        rows="3">{{ $schoolAffiliation->trust_address }}</textarea>
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
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>6. Date up to which the Registration of the Society / Trust is
                                                        valid. Attach
                                                        certificate of Registration</label>
                                                    <div role="button" class="form-text fw-bold text-dark"
                                                        onclick="$('#annexureModal').modal('show');">[Annexure]</div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="date" class="form-control mb-2"
                                                        name="trust_validity"
                                                        value="{{ $schoolAffiliation->trust_validity }}">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>7. Whether the school has a duly constituted School
                                                        Managing Committee as per the regulations of
                                                        the State/ U.T. in which the school is
                                                        situated or Affiliation Bye – Laws of BSB?
                                                    </label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="duly_constituted"
                                                            value="{{ $schoolAffiliation->duly_constituted }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>8. Complete list of the members of the Managing
                                                        Committee with full Particulars including name,
                                                        address, occupation, designation, term of
                                                        membership.
                                                    </label>
                                                    <div role="button" class="form-text fw-bold text-dark"
                                                        onclick="$('#annexureModal').modal('show');">[Annexure]</div>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>9. Has the school obtained a ‘No Objection
                                                        Certificate’ from the competent authority of the
                                                        State/U.T. for grant of affiliation of the school to
                                                        BSB? If yes, Enclose the copy of the same.
                                                    </label>
                                                    <div role="button" class="form-text fw-bold text-dark"
                                                        onclick="$('#annexureModal').modal('show');">[Annexure]</div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="no_objection"
                                                            value="{{ $schoolAffiliation->no_objection }}">
                                                    </div>
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8 mb-2">
                                                    <label>10. Submit evidence to the effect that the school is not being
                                                        run on
                                                        commercial lines? A copy of each of the latest balance sheet duly
                                                        signed by the
                                                        auditors, school prospectus, if any, fee structure, income &amp;
                                                        expenditure account
                                                        etc. duly signed by the Head of the Institution / Manager be
                                                        attached with the
                                                        report. </label>
                                                    <div role="button" class="form-text fw-bold text-dark"
                                                        onclick="$('#annexureModal').modal('show');">[Annexure]</div>
                                                </div>
                                                <div class="col-lg-4 mb-2">
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
                                                </div>
                                                <div class="col-lg-8 mb-2">
                                                    <label>11. Attach an affidavit duly signed by the notary to the effect
                                                        that the
                                                        Society/ Trust running the school is non-proprietary and not Profit
                                                        making in
                                                        Character?</label>
                                                    <div role="button" class="form-text fw-bold text-dark"
                                                        onclick="$('#annexureModal').modal('show');">[Annexure]</div>
                                                </div>
                                                <div class="col-lg-4 mb-2">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>12. Whether the school is receiving financial aid from any Govt.
                                                        / Semi Govt.
                                                        / Autonomous / Corporate Body under CSR. If so, details
                                                        thereof.</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="financial_aid_any_govt"
                                                            value="{{ $schoolAffiliation->financial_aid_any_govt }}">
                                                    </div>
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
                                                </div>
                                            </div>

                                        </div>

                                        <div class="px-3">
                                            <legend class="text-primary h5">B. Staff / Qualifications, &amp; Service
                                                Conditions</legend>
                                            <div class="row mb-3">
                                                <div class="col-lg-12">
                                                    <label>1. (i) The number of teachers including Librarian, PTI and
                                                        Principal in
                                                        position (Regular, Adhoc or Part – time)</label>
                                                    <div class="col-lg-10 table-responsive text-center m-3">
                                                        <table class="table table-bordered">
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

                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="principle[0]"
                                                                            value="{{ isset($principle_stats[0]) ? $principle_stats[0] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="principle[1]"
                                                                            value="{{ isset($principle_stats[1]) ? $principle_stats[1] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="principle[2]"
                                                                            value="{{ isset($principle_stats[2]) ? $principle_stats[2] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="principle[3]"
                                                                            value="{{ isset($principle_stats[3]) ? $principle_stats[3] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="principle[4]"
                                                                            value="{{ isset($principle_stats[4]) ? $principle_stats[4] : '' }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>B.</td>
                                                                    <td>NTTs</td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="ntt[0]"
                                                                            value="{{ isset($ntt_stats[0]) ? $ntt_stats[0] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="ntt[1]"
                                                                            value="{{ isset($ntt_stats[1]) ? $ntt_stats[1] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="ntt[2]"
                                                                            value="{{ isset($ntt_stats[2]) ? $ntt_stats[2] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="ntt[3]"
                                                                            value="{{ isset($ntt_stats[3]) ? $ntt_stats[3] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="ntt[4]"
                                                                            value="{{ isset($ntt_stats[4]) ? $ntt_stats[4] : '' }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>C.</td>
                                                                    <td>PRTs</td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="prt[0]"
                                                                            value="{{ isset($prt_stats[0]) ? $prt_stats[0] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="prt[1]"
                                                                            value="{{ isset($prt_stats[1]) ? $prt_stats[1] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="prt[2]"
                                                                            value="{{ isset($prt_stats[2]) ? $prt_stats[2] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="prt[3]"
                                                                            value="{{ isset($prt_stats[3]) ? $prt_stats[3] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="prt[4]"
                                                                            value="{{ isset($prt_stats[4]) ? $prt_stats[4] : '' }}"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>D.</td>
                                                                    <td>TGTs</td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="tgt[0]"
                                                                            value="{{ isset($tgt_stats[0]) ? $tgt_stats[0] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="tgt[1]"
                                                                            value="{{ isset($tgt_stats[1]) ? $tgt_stats[1] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="tgt[2]"
                                                                            value="{{ isset($tgt_stats[2]) ? $tgt_stats[2] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="tgt[3]"
                                                                            value="{{ isset($tgt_stats[3]) ? $tgt_stats[3] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="tgt[4]"
                                                                            value="{{ isset($tgt_stats[4]) ? $tgt_stats[4] : '' }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>E.</td>
                                                                    <td>PGT</td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="pgt[0]"
                                                                            value="{{ isset($pgt_stats[0]) ? $pgt_stats[0] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="pgt[1]"
                                                                            value="{{ isset($pgt_stats[1]) ? $pgt_stats[1] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="pgt[2]"
                                                                            value="{{ isset($pgt_stats[2]) ? $pgt_stats[2] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="pgt[3]"
                                                                            value="{{ isset($pgt_stats[3]) ? $pgt_stats[3] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="pgt[4]"
                                                                            value="{{ isset($pgt_stats[4]) ? $pgt_stats[4] : '' }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>F.</td>
                                                                    <td>Librarian</td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="librarian[0]"
                                                                            value="{{ isset($librarian_stats[0]) ? $librarian_stats[0] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="librarian[1]"
                                                                            value="{{ isset($librarian_stats[1]) ? $librarian_stats[1] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="librarian[2]"
                                                                            value="{{ isset($librarian_stats[2]) ? $librarian_stats[2] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="librarian[3]"
                                                                            value="{{ isset($librarian_stats[3]) ? $librarian_stats[3] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="librarian[4]"
                                                                            value="{{ isset($librarian_stats[4]) ? $librarian_stats[4] : '' }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>G.</td>
                                                                    <td>PTI</td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="pti[0]"
                                                                            value="{{ isset($pti_stats[0]) ? $pti_stats[0] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="pti[1]"
                                                                            value="{{ isset($pti_stats[1]) ? $pti_stats[1] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="pti[2]"
                                                                            value="{{ isset($pti_stats[2]) ? $pti_stats[2] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="pti[3]"
                                                                            value="{{ isset($pti_stats[3]) ? $pti_stats[3] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="pti[4]"
                                                                            value="{{ isset($pti_stats[4]) ? $pti_stats[4] : '' }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">Total</td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="total[0]"
                                                                            value="{{ isset($total_stats[0]) ? $total_stats[0] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="total[1]"
                                                                            value="{{ isset($total_stats[1]) ? $total_stats[1] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="total[2]"
                                                                            value="{{ isset($total_stats[2]) ? $total_stats[2] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="total[3]"
                                                                            value="{{ isset($total_stats[3]) ? $total_stats[3] : '' }}">
                                                                    </td>
                                                                    <td><input readonly type="text"
                                                                            class="form-control" name="total[4]"
                                                                            value="{{ isset($total_stats[4]) ? $total_stats[4] : '' }}">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label>(ii) The no. of trained and untrained teachers</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="d-flex justify-content-around">
                                                        <input readonly type="text" class="form-control w-25"
                                                            name="trained_teachers"
                                                            value="{{ $schoolAffiliation->trained_teachers }}"
                                                            placeholder="Trained">
                                                        <input readonly type="text" class="form-control w-25"
                                                            name="untrained_teachers"
                                                            value="{{ $schoolAffiliation->untrained_teachers }}"
                                                            placeholder="Untrained">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8 mb-2">
                                                    <label>2. The name of the principal, teachers, designation,
                                                        qualifications, subjects
                                                        studied at graduation/ post-graduation level, classes and subjects
                                                        they are
                                                        teaching. Date of appointment, Date of confirmation, pay
                                                        scale.</label>
                                                    <div class="form-text fw-bold">(Annex fairly typed staff statement with
                                                        all above
                                                        details)</div>
                                                    <div role="button" class="form-text fw-bold text-dark"
                                                        onclick="$('#annexureModal').modal('show');">[Annexure]</div>
                                                </div>
                                                <div class="col-lg-4 mb-2">
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
                                                </div>
                                                <div class="col-lg-8 mb-2">
                                                    <label>(i) Whether the school has appointed Wellness Teacher
                                                        (Counsellor)? If so,
                                                        mention particulars</label>
                                                </div>
                                                <div class="col-lg-4 mb-2">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="wellness_teacher_counsellor"
                                                            value="{{ $schoolAffiliation->wellness_teacher_counsellor }}">
                                                    </div>
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

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>3. Are the service conditions defined? If so, are the services
                                                        conditions in
                                                        accordance with those of the centre State/ U.T.</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="service_condition"
                                                            value="{{ $schoolAffiliation->service_condition }}">
                                                    </div>
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>4. Whether the pay scales being followed as per State Govt. U.T.
                                                        or Central
                                                        Govt. with Pay Scale and rate of D.A. may be mentioned.</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="pay_scale_da"
                                                            value="{{ $schoolAffiliation->pay_scale_da }}">
                                                    </div>
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>5. The other allowances as extended to the employees of the
                                                        State/ U.T. and
                                                        Central Govt. are being paid?</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="other_allowance"
                                                            value="{{ $schoolAffiliation->other_allowance }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>6. Any other benefit such as GPF/CPF/EPF earned leave etc. may be
                                                        indicated.</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="gpf_cpf_earned_leave"
                                                            value="{{ $schoolAffiliation->gpf_cpf_earned_leave }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>7. Whether service book and Personal files are
                                                        maintained?</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="maintained_files"
                                                            value="{{ $schoolAffiliation->maintained_files }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>8. The period of probation and number of teachers confirmed and
                                                        on
                                                        probation.</label>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>9. Whether the payment of salary to the staff is made by cheque
                                                        or cash or
                                                        through Bank account transfer
                                                        Give details.
                                                    </label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control"
                                                        name="salary_to_the_staff"
                                                        value="{{ $schoolAffiliation->salary_to_the_staff }}"
                                                        placeholder="">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>10. If salary is not paid through Bank account transfer,
                                                        reasons.</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <textarea readonly class="form-control" name="salary_is_not_paid" placeholder="">{{ $schoolAffiliation->salary_is_not_paid }}</textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="part2">
                                    <div class="card mb-5">
                                        <div class="p-3">
                                            <label class="text-primary h5">A. Campus &amp; Building</label>
                                            <div class="row mb-3">
                                                <div class="col-lg-8 mb-2">
                                                    <label>1. (i) Campus area both in Sq. Mtr and Hect.</label>
                                                    <div class="form-text fw-bold">(at site from where the school is
                                                        presently running)
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 mb-2">
                                                    <input readonly type="text" class="form-control"
                                                        name="campus_area_sq"
                                                        value="{{ $schoolAffiliation->campus_area_sq }}">
                                                </div>
                                                <div class="col-lg-8 mb-2">
                                                    <label class="mx-3">(ii) Build area in Sq. Mtr</label>
                                                </div>
                                                <div class="col-lg-4 mb-2">
                                                    <input readonly type="text" class="form-control"
                                                        name="built_up_area"
                                                        value="{{ $schoolAffiliation->built_up_area }}">
                                                </div>
                                                <div class="col-lg-8 mb-2">
                                                    <label class="mx-3">(iii) State the location of the school
                                                        site</label>
                                                </div>
                                                <div class="col-lg-4 mb-2">
                                                    <input readonly type="text" class="form-control"
                                                        name="school_site_state"
                                                        value="{{ $schoolAffiliation->school_site_state }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>2. What is the ownership status?
                                                        Whether the campus area and property Constructed over it belongs to
                                                        the
                                                        Society/School? If on lease, for how many years?
                                                    </label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control"
                                                        name="ownership_status"
                                                        value="{{ $schoolAffiliation->ownership_status }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>3. If there are more than one land documents, indicate whether
                                                        the plots are
                                                        contiguous? </label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control"
                                                        name="plots_contiguous"
                                                        value="{{ $schoolAffiliation->plots_contiguous }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>4. Enclose a certified copy of complete Registered land
                                                        document(s) and land
                                                        Certificate, completely filled in and issued by a Revenue/
                                                        Registering authority
                                                        has been obtained from school and enclosed with Inspection Report
                                                    </label>
                                                    <div role="button" class="form-text fw-bold text-dark"
                                                        onclick="$('#annexureModal').modal('show');">[Annexure]</div>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
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
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control"
                                                        name="school_pucca_building"
                                                        value="{{ $schoolAffiliation->school_pucca_building }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>6. Infrastructure details the total number of rooms available in
                                                        the school
                                                        Number of rooms, other than Class – rooms for Administrations &amp;
                                                        Co-curricular
                                                        activities.</label>
                                                    <div class="form-text fw-bold">(i.e., Lab, Library, Staff Room etc.)
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>7. Whether the class – rooms are adequate to meet the
                                                        requirements of the
                                                        students/ subject teachers/ co–curricular activities? </label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly class="form-control" type="text"
                                                            name="co_curricular_activities"
                                                            value="{{ $schoolAffiliation->co_curricular_activities }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-3">
                                            <legend class="text-primary h5">B. Playground</legend>
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>1. Size of Playground and details of Games/ Sports/ Co-curricular
                                                        activities
                                                        for which facilities are available</label>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>2. If the playground(s) is not a part of the school campus, is it
                                                        easily
                                                        accessible to students?</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly class="form-control" type="text"
                                                            name="playground_part"
                                                            value="{{ $schoolAffiliation->playground_part }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>3. Attach a PDF file of School Photographs with all amenities
                                                        like
                                                        playground, toilets, and school top-view, etc.</label>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-3">
                                            <legend class="text-primary h5">C. Physical and Health, Fire, Drinking Water
                                                Certificates
                                            </legend>
                                            <div class="row mb-3">
                                                <div class="col-lg-12">
                                                    <label>1. Whether Health, Fire Safety, Safe Drinking water, Building
                                                        safety
                                                        Certificates have been obtained from the concerned departments?
                                                    </label>
                                                </div>

                                                <div class="col-lg-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-8 mb-1">
                                                            <label class="px-3">A. Safe Drinking Water, Health and
                                                                Sanitation
                                                                Certificate.</label>
                                                        </div>
                                                        <div class="col-lg-4 mb-1">
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
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 mb-1">
                                                            <label class="px-5">I. Issuing Authority</label>
                                                        </div>
                                                        <div class="col-lg-4 mb-1">
                                                            <input readonly type="text" class="form-control"
                                                                name="water_issuing_authority"
                                                                value="{{ $schoolAffiliation->water_issuing_authority }}">
                                                        </div>
                                                        <div class="col-lg-8 mb-1">
                                                            <label class="px-5">II. Valid Up to</label>
                                                        </div>
                                                        <div class="col-lg-4 mb-1">
                                                            <input readonly type="date" class="form-control"
                                                                name="water_valid_up_to"
                                                                value="{{ $schoolAffiliation->water_valid_up_to }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-8 mb-1">
                                                            <label class="px-3">B. Fire Certificate</label>
                                                        </div>
                                                        <div class="col-lg-4 mb-1">
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
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 mb-1">
                                                            <label class="px-5">I. Issuing Authority</label>
                                                        </div>
                                                        <div class="col-lg-4 mb-1">
                                                            <input readonly type="text" class="form-control"
                                                                name="fire_issuing_authority"
                                                                value="{{ $schoolAffiliation->fire_issuing_authority }}">
                                                        </div>
                                                        <div class="col-lg-8 mb-1">
                                                            <label class="px-5">II. Valid Up to</label>
                                                        </div>
                                                        <div class="col-lg-4 mb-1">
                                                            <input readonly type="date" class="form-control"
                                                                name="fire_valid_up_to"
                                                                value="{{ $schoolAffiliation->fire_valid_up_to }}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-8 mb-1">
                                                            <label class="px-3">C. Building Safety</label>
                                                        </div>
                                                        <div class="col-lg-4 mb-1">
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
                                                        </div>
                                                        <div class="col-lg-8 mb-1">
                                                            <label class="px-5">I. Issuing Authority</label>
                                                        </div>
                                                        <div class="col-lg-4 mb-1">
                                                            <input readonly type="text" class="form-control"
                                                                name="bullding_issuing_authority"
                                                                value="{{ $schoolAffiliation->bullding_issuing_authority }}">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>2. Whether facilities as per (1) above are satisfactory.</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly class="form-control" type="text"
                                                            name="whether_facilities"
                                                            value="{{ $schoolAffiliation->whether_facilities }}">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>3. No. of toilets available.</label>
                                                </div>
                                                <div class="col-lg-4 table-responsive text-center m-auto">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>Boys</th>
                                                                <th>Girls</th>
                                                                <th>Staff</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input readonly type="text" class="form-control"
                                                                        name="no_toilets_boys"
                                                                        value="{{ $schoolAffiliation->no_toilets_boys }}">
                                                                </td>
                                                                <td><input readonly type="text" class="form-control"
                                                                        name="no_toilets_girls"
                                                                        value="{{ $schoolAffiliation->no_toilets_girls }}">
                                                                </td>
                                                                <td><input readonly type="text" class="form-control"
                                                                        name="no_toilets_staff"
                                                                        value="{{ $schoolAffiliation->no_toilets_staff }}">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>4. No. of water taps available.</label>
                                                </div>
                                                <div class="col-lg-4 table-responsive text-center m-auto">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>Boys</th>
                                                                <th>Girls</th>
                                                                <th>Staff</th>
                                                            </tr>
                                                            <tr>
                                                                <td><input readonly type="text" class="form-control"
                                                                        name="no_water_taps_boys"
                                                                        value="{{ $schoolAffiliation->no_water_taps_boys }}">
                                                                </td>
                                                                <td><input readonly type="text" class="form-control"
                                                                        name="no_water_taps_girls"
                                                                        value="{{ $schoolAffiliation->no_water_taps_girls }}">
                                                                </td>
                                                                <td><input readonly type="text" class="form-control"
                                                                        name="no_water_taps_stuff"
                                                                        value="{{ $schoolAffiliation->no_water_taps_stuff }}">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-3">
                                            <legend class="text-primary h5">D. Library / Furniture / Books etc.</legend>
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>1. Particulars of the Librarian and other library staff</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control"
                                                        name="particulars_librarian"
                                                        value="{{ $schoolAffiliation->particulars_librarian }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>2. Size of the Library</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control"
                                                        name="library_siz_sq"
                                                        value="{{ $schoolAffiliation->library_siz_sq }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>3. Whether the library has a reading room for the students/
                                                        teachers?</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="library_reading_room"
                                                            value="{{ $schoolAffiliation->library_reading_room }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>4. Whether furniture provided is sufficient to meet the present/
                                                        future
                                                        requirements?</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="furniture_sufficient"
                                                            value="{{ $schoolAffiliation->furniture_sufficient }}">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>5. Total number of books. Subject wise detail of books.</label>
                                                    <div class="form-text fw-bold">(List of books not to be annexed).</div>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>6. Name of journals/ Periodical News – papers are being
                                                        subscribed.</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control"
                                                        name="journals_name"
                                                        value="{{ $schoolAffiliation->journals_name }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>7. Whether more books are needed to meet the present
                                                        requirements?</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly class="form-control" type="text"
                                                            name="book_present_requirements"
                                                            value="{{ $schoolAffiliation->book_present_requirements }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>8. Whether there is a separate reference section for the
                                                        staff?</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="stuff_reference_section"
                                                            value="{{ $schoolAffiliation->stuff_reference_section }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>9. Annual Budget for the Library Books/ Magazines, Newspapers
                                                        etc.</label>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>

                                        </div>

                                        <div class="px-3">
                                            <legend class="text-primary h5">E. Laboratories</legend>
                                            <div class="row mb-3">
                                                <div class="col-lg-12">
                                                    <label>1. Details of laboratories</label>
                                                    <div class="col-lg-8 table-responsive text-center">
                                                        <table class="table table-striped table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <th>S.No.</th>
                                                                    <th width="250px">Laboratory Type</th>
                                                                    <th>Number</th>
                                                                    <th>Size</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>(i)</td>
                                                                    <td>Composite Science Lab</td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control"
                                                                            name="composite_science_lab"
                                                                            value="{{ $schoolAffiliation->composite_science_lab }}">
                                                                    </td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control"
                                                                            name="composite_science_size"
                                                                            value="{{ $schoolAffiliation->composite_science_size }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>(ii)</td>
                                                                    <td>Physics</td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control" name="physics"
                                                                            value="{{ $schoolAffiliation->physics }}">
                                                                    </td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control" name="physics_size"
                                                                            value="{{ $schoolAffiliation->physics_size }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>(iii)</td>
                                                                    <td>Chemistry</td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control" name="chemistry"
                                                                            value="{{ $schoolAffiliation->chemistry }}">
                                                                    </td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control" name="chemistry_size"
                                                                            value="{{ $schoolAffiliation->chemistry_size }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>(iv)</td>
                                                                    <td>Biology</td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control" name="biology"
                                                                            value="{{ $schoolAffiliation->biology }}">
                                                                    </td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control" name="biology_size"
                                                                            value="{{ $schoolAffiliation->biology_size }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>(v)</td>
                                                                    <td>Computer Science</td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control" name="computer_science"
                                                                            value="{{ $schoolAffiliation->computer_science }}">
                                                                    </td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control"
                                                                            name="computer_science_size"
                                                                            value="{{ $schoolAffiliation->computer_science_size }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>(vi)</td>
                                                                    <td>Mathematics</td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control" name="mathematics"
                                                                            value="{{ $schoolAffiliation->mathematics }}">
                                                                    </td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control" name="mathematics_size"
                                                                            value="{{ $schoolAffiliation->mathematics_size }}">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>(vii)</td>
                                                                    <td>Others</td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control" name="others"
                                                                            value="{{ $schoolAffiliation->others }}">
                                                                    </td>
                                                                    <td> <input readonly type="text"
                                                                            class="form-control" name="others_size"
                                                                            value="{{ $schoolAffiliation->others_size }}">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>2. Whether each Lab has Sufficient equipment for practical work
                                                        as per BSB
                                                        norms applicable for the course for which the school has applied?
                                                    </label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="sufficient_equipment"
                                                            value="{{ $schoolAffiliation->sufficient_equipment }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8 mb-2">
                                                    <label>3. (i) No. of computers available</label>
                                                </div>
                                                <div class="col-lg-4 mb-2">
                                                    <input readonly type="text" class="form-control"
                                                        name="no_of_pc_available"
                                                        value="{{ $schoolAffiliation->no_of_pc_available }}">
                                                </div>
                                                <div class="col-lg-8 mb-2">
                                                    <label class="mx-3">(ii) Ratio students per computer</label>
                                                </div>
                                                <div class="col-lg-4 mb-2">
                                                    <input readonly type="text" class="form-control"
                                                        name="ratio_per_pc"
                                                        value="{{ $schoolAffiliation->ratio_per_pc }}">
                                                </div>
                                                <div class="col-lg-8 mb-2">
                                                    <label class="mx-3">(iii) Whether Broad band Internet Connection
                                                        available in the
                                                        school</label>
                                                </div>
                                                <div class="col-lg-4 mb-2">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="net_conection_avalible"
                                                            value="{{ $schoolAffiliation->net_conection_avalible }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-3">
                                            <legend class="text-primary h5">F. Income &amp; Expenditure Accounts</legend>
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>1. Main Source of Income</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control"
                                                        name="main_Income_source"
                                                        value="{{ $schoolAffiliation->main_Income_source }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>2. Tuition fee charged per month</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control"
                                                        name="tuition_fee_per_month"
                                                        value="{{ $schoolAffiliation->tuition_fee_per_month }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>3. Other fees, registration, cautions money etc. with
                                                        details</label>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>4. Building funds/ Development Charges, if any.</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control"
                                                        name="building_funds"
                                                        value="{{ $schoolAffiliation->building_funds }}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8 mb-2">
                                                    <label>5. (a) Is the School maintain separate account other than
                                                        Society’s
                                                        account.?</label>
                                                </div>
                                                <div class="col-lg-4 mb-2">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="if_separte_account"
                                                            value="{{ $schoolAffiliation->if_separte_account }}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-8 mb-2">
                                                    <label class="mx-3">(b) Whether the accounts of the school are
                                                        maintained properly
                                                        and regularly audited by the Regd. C.A./ checked by the Audit
                                                        department of the
                                                        State? </label>
                                                </div>
                                                <div class="col-lg-4 mb-2">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"
                                                            name="school_account_maintained"
                                                            value="{{ $schoolAffiliation->school_account_maintained }}">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="part3">
                                    <div class="card mb-5">
                                        <div class="p-3">
                                            <label class="text-primary h5">A. Academic</label>
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>1. Number of students</label>
                                                    <div class="form-text fw-bold">(Boys and Girls)</div>
                                                </div>
                                                <div class="col-lg-4 table-responsive text-center m-auto">
                                                    <table class="table table-striped table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th>Boys</th>
                                                                <th>Girls</th>

                                                            </tr>
                                                            <tr>
                                                                <td><input readonly type="text" class="form-control"
                                                                        name="no_student_boys"
                                                                        value="{{ $schoolAffiliation->no_student_boys }}">
                                                                </td>
                                                                <td><input readonly type="text" class="form-control"
                                                                        name="no_student_girls"
                                                                        value="{{ $schoolAffiliation->no_student_girls }}">
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>2. Latest section–wise strength</label>
                                                    <div class="form-text fw-bold">(Annex the statement)</div>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>3. Total No. of Section</label>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>4. Total No. of teachers excluding Principal, PTI and
                                                        Librarian</label>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>5. Whether any religious education has been made compulsory in
                                                        the school? If so, details thereof</label>
                                                </div>
                                                <div class="col-lg-4 mb-2">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control" name="religious_education"
                                                            value="{{ $schoolAffiliation->religious_education }}">
                                                    </div>
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

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>6. (a) Are the materials available with the school (Tick the
                                                        boxes): </label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input readonly type="checkbox" class="form-check-input"
                                                            name="materials_available[0]" value="Teachers Manual" onclick="return false;"
                                                            {{ $materials_available[0] == "Teachers Manual" ? 'checked' : '' }}
                                                            >
                                                        <label class="form-check-label">Teacher’s Manual</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input readonly type="checkbox" class="form-check-input"
                                                            name="materials_available[1]"
                                                            value="Certificate for School Based Evaluation"
                                                            {{ $materials_available[1] == "Certificate for School Based Evaluation" ? 'checked' : '' }}
                                                            onclick="return false;">
                                                        <label class="form-check-label">Certificate for School Based
                                                            Evaluation</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input readonly type="checkbox" class="form-check-input"
                                                            name="materials_available[2]" value="Report Card"
                                                            {{ $materials_available[2] == "Report Card" ? 'checked' : '' }}
                                                            onclick="return false;"
                                                            >
                                                        <label class="form-check-label">Report Card</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input readonly type="checkbox" class="form-check-input"
                                                            name="materials_available[3]" value="Life Skills Manual"
                                                            {{ $materials_available[3] == "Life Skills Manual" ? 'checked' : '' }}
                                                            onclick="return false;"
                                                            >
                                                        <label class="form-check-label">Life Skills Manual</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input readonly type="checkbox" class="form-check-input"
                                                            name="materials_available[4]" value="School Health Manuals"
                                                            {{ $materials_available[4] == "School Health Manuals" ? 'checked' : '' }}
                                                            onclick="return false;"
                                                            >
                                                        <label class="form-check-label">School Health Manuals</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>(b) Is the school providing a School Based certificate in the
                                                        following classes. Please attach copies </label>
                                                    <ol type="i">
                                                        <li>Pre – Primary</li>
                                                        <li>Class I to II</li>
                                                        <li>Class III to V</li>
                                                        <li>Class VI to VIII</li>
                                                    </ol>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control" name="school_based" 
                                                        value="{{ $schoolAffiliation->school_based }}"
                                                        >
                                                    </div>
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
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>(c) In case of clubs, tick those which are
                                                        functioning in the school
                                                    </label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input readonly type="checkbox" class="form-check-input"
                                                            name="clubs[0]" value="Eco clubs" 
                                                            {{ $clubs[0] == "Eco clubs" ? 'checked' : '' }}
                                                            onclick="return false;">
                                                        <label class="form-check-label">Eco clubs</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input readonly type="checkbox" class="form-check-input"
                                                            name="clubs[1]" value="Health and Wellness Clubs"
                                                            {{ $clubs[1] == "Health and Wellness Clubs" ? 'checked' : '' }}
                                                            onclick="return false;">
                                                        <label class="form-check-label">Health and Wellness Clubs</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input readonly type="checkbox" class="form-check-input"
                                                            name="clubs[2]" value="Heritage Clubs" 
                                                            {{ $clubs[2] == "Heritage Clubs" ? 'checked' : '' }}
                                                            onclick="return false;">
                                                        <label class="form-check-label">Heritage Clubs</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input readonly type="checkbox" class="form-check-input"
                                                            name="clubs[3]" value="Integrity Clubs"
                                                            {{ $clubs[3] == "Integrity Clubs" ? 'checked' : '' }}
                                                            onclick="return false;">
                                                        <label class="form-check-label">Integrity Clubs</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input readonly type="checkbox" class="form-check-input"
                                                            name="clubs[4]" value="Reading Clubs"
                                                            {{ $clubs[4] == "Reading Clubs" ? 'checked' : '' }}
                                                            onclick="return false;">
                                                        <label class="form-check-label">Reading Clubs</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input readonly type="checkbox" class="form-check-input"
                                                            name="clubs[5]" value="NCC/NSS" 
                                                            {{ $clubs[5] == "NCC/NSS" ? 'checked' : '' }}
                                                            onclick="return false;">
                                                        <label class="form-check-label">NCC/NSS</label>
                                                    </div>
                                                    <div class="form-check">
                                                       @if(!empty($schoolAffiliation->clubs_other))
                                                            <div id="clubs_other">
                                                                <input readonly type="text" class="form-control"
                                                                    name="clubs_other" value="{{$schoolAffiliation->clubs_other}}"
                                                                    placeholder="Specify here...">
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>(d) Whether the facilities of formative assessment/ third
                                                        language teaching/ work experience/ PHE are available and their
                                                        record is being maintained? </label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control" name="facilities_of_formative"
                                                            value="{{$schoolAffiliation->facilities_of_formative}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-12">
                                                    <label>7. Whether the syllabus prescribed by the Board is being
                                                        followed?</label>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label class="form-check-label mx-3">Pre – Primary</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control" name="syllabus_follow[0]" value="{{$syllabus_follow[0]}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label class="form-check-label mx-3">I - II</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control" name="syllabus_follow[1]" value="{{$syllabus_follow[1]}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label class="form-check-label mx-3">III - V</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control" name="syllabus_follow[2]" value="{{$syllabus_follow[2]}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <label class="form-check-label mx-3">VI - VIII</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control" name="syllabus_follow[3]" value="{{ $syllabus_follow[3] }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-lg-12">
                                                    <label>8. Record Keeping</label>
                                                </div>
                                                <div class="col-lg-12 px-3">
                                                    <div class="row mb-3">
                                                        <div class="col-lg-8">
                                                            <label>1. (a) Recording of formative Assessment in all subjects
                                                                including types of tasks to be verified.</label>
                                                        </div>
                                                        <div class="col-lg-4">
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
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <label>(b) Recording of formative Assessment in all subjects
                                                                including types of tasks to be verified.</label>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-check form-check-inline">
                                                                <input readonly type="text" class="form-control" name="recording_of_formative"
                                                                    value="{{ $schoolAffiliation->recording_of_formative }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <label>(c) Comments on the quality of records such as Narrative
                                                                / Anectotal / Observation tools maintained by teachers.
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <input readonly type="text" class="form-control"
                                                                name="comments_quality_of_records" value="{{ $schoolAffiliation->comments_quality_of_records }}">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-lg-8">
                                                            <label>2. Whether the teachers are sent for in service
                                                                refresher/ re – orientation programmes to update their
                                                                knowledge and teaching skills? Is so, give details for the
                                                                last three years. </label>
                                                        </div>
                                                        <div class="col-lg-4">
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
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-lg-8">
                                                            <label>3. Is the School facilities/ inclusive education of
                                                                Physically challenged. </label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-check form-check-inline">
                                                                <input readonly type="text" class="form-control"
                                                                    name="school_facilities_Physically_challenged"
                                                                    value="{{ $schoolAffiliation->school_facilities_Physically_challenged }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-lg-8">
                                                            <label>4. Is the school exclusively preparing candidates for BSB
                                                                or some classes of the other Board are functioning in the
                                                                same building? If so, details </label>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-check form-check-inline">
                                                                <input readonly type="text" class="form-control" name="functioning_bulding"
                                                                    value="{{ $schoolAffiliation->functioning_bulding }}">
                                                            </div>
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
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-lg-8">
                                                            <label>5. Results of the Board’s Examination(s) for the last
                                                                three years (if applicable)</label>
                                                        </div>
                                                        <div class="col-lg-4">
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="px-3">
                                            <label class="text-primary h5">B. Prospective Plans</label>
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>1. Whether the school is in a position to fulfil conditions for
                                                        expansion from Middle class syllabus/ Provisional affiliation up to
                                                        Secondary or Sr. Secondary Classes.</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-check form-check-inline">
                                                        <input readonly type="text" class="form-control"  name="prospective_plans" value="{{ $schoolAffiliation->prospective_plans }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="part4">
                                    <div class="card mb-5">
                                        <div class="p-3">
                                            <label class="text-primary h5">Affiliation Fee Desposit Information</label>
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>Account Holder's Name</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control" name="account_holder" value="{{$schoolAffiliation->account_holder}}">
                                                </div>
                                            </div>
            
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>Account Number</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control" name="account_number" value="{{ $schoolAffiliation->account_number }}">
                                                </div>
                                            </div>
            
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>Bank Name</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control" name="bank_name" value="{{ $schoolAffiliation->bank_name }}">
                                                </div>
                                            </div>
            
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>IFSC Code</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control" name="ifsc_code" value="{{ $schoolAffiliation->ifsc_code }}">
                                                </div>
                                            </div>
            
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>Mode of Payment</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control" name="payment_mode" value="{{ $schoolAffiliation->payment_mode }}">
                                                </div>
                                            </div>
            
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>Transaction ID</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control" name="transaction_id" value="{{ $schoolAffiliation->transaction_id }}">
                                                </div>
                                            </div>
            
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>Upload the payment reciept</label>
                                                </div>
                                                <div class="col-lg-4">
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
                                                </div>
                                            </div>
            
                                            <div class="row mb-3">
                                                <div class="col-lg-8">
                                                    <label>Transaction Remarks, If any</label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input readonly type="text" class="form-control" name="transaction_remarks" value="{{$schoolAffiliation->transaction_remarks}}">
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>

                    <div class="p-3 mb-3">
                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">
                                <a type="button"
                                    href="{{ route('mergePdf', ['id' => $schoolAffiliation->school_affiliation_id]) }}"
                                    class="btn btn-primary float-right" style="margin-right: 5px;">
                                    <i class="fas fa-download"></i> Generate PDF
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
