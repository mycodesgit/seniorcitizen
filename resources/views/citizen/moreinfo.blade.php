@extends('layouts.master')

@section('body')
<style>
@font-face {
    font-family: 'Helvetica'; 
    src: url('{{ asset('font/Helvetica.ttf') }}') format('truetype');
    font-weight: normal;
    font-style: normal;
}
body {
    font-family: 'Helvetica';
}
.form-control {
  display: block;
  width: 100%;
  padding: 0 !important;
  height: 25px;
  font-size: 12px;
  text-transform: capitalize; 
}
.checkbox{
  width: 23px;
  height: 23px;
}
.label{
    font-size: 12px;
}
.gen-label{
    font-size: 12px;
    width: 100%;
}
.paper{
    height: 300px; width: 100%;  background-color: #fff;
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    width: 100%;
}
</style>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Citizen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Citizen</li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-gray-dark card-tabs">
                        <div class="card-header pl-1 pr-1 pb-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-six-uno-tab" data-toggle="pill" href="#custom-tabs-six-uno" role="tab" aria-controls="custom-tabs-six-uno" aria-selected="true">I. INFORMATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-six-dos-tab" data-toggle="pill" href="#custom-tabs-six-dos" role="tab" aria-controls="custom-tabs-six-dos" aria-selected="false">II. FAMILY COMPOSITION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-six-tres-tab" data-toggle="pill" href="#custom-tabs-six-tres" role="tab" aria-controls="custom-tabs-six-tres" aria-selected="false">III. EDUCATION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-six-quatro-tab" data-toggle="pill" href="#custom-tabs-six-quatro" role="tab" aria-controls="custom-tabs-six-quatro" aria-selected="false">IV. DEPENDENCY PROFILE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-six-singko-tab" data-toggle="pill" href="#custom-tabs-six-singko" role="tab" aria-controls="custom-tabs-six-singko" aria-selected="false">V. ECONOMIC PROFILE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-six-seis-tab" data-toggle="pill" href="#custom-tabs-six-seis" role="tab" aria-controls="custom-tabs-six-seis" aria-selected="false">VI. HEALTH PROFILE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-seven-syete-tab" data-toggle="pill" href="#custom-tabs-seven-syete" role="tab" aria-controls="custom-tabs-seven-syete" aria-selected="false">VII. ATTACHMENT</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-six-uno" role="tabpanel" aria-labelledby="custom-tabs-six-uno-tab">
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">I. IDENTIFYING INFORMATION</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row col-12">
                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">1. Name of Senior Citizen</div>
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Last Name </span>
                                                        <input type="text" name="lname" value="{{ $citizen->lname }}" class="form-control" data-update="lname" data-model="Citizen" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">First Name </span>
                                                        <input type="text" name="fname" value="{{ $citizen->fname }}" class="form-control" data-update="fname" data-model="Citizen" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Middle Name </span>
                                                        <input type="text" name="mname" value="{{ $citizen->mname }}" class="form-control" data-update="mname" data-model="Citizen" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Extension (Jr,Sr)</span>
                                                        <input type="text" name="ext" value="{{ $citizen->ext }}" class="form-control" data-update="ext" data-model="Citizen" data-cid="{{ $citizen->id }}">
                                                    </div>                                                
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">3. Date of Birth </div>
                                                        <input type="date" name="bday" id="bday" style="width: 75%;" value="{{ $citizenI->bday }}" class="form-control mt2 float-left" data-update="bday" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                        <input type="text" nam="age" id="age" value="{{ $citizenI->age }}" class="form-control text-center mt2 float-right" style="width: 25%;" readonly>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">4. Place of birth</div>
                                                        <input type="text" name="p_birth" value="{{ $citizenI->p_birth }}" class="form-control mt2" data-update="p_birth" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">5. Marital Status</div>
                                                        <select type="text" name="m_status" class="form-control mt2" data-update="m_status" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                            <option value="">Select Marital Status</option>
                                                            <option @if($citizenI->m_status == "Single") selected @endif>Single</option>
                                                            <option @if($citizenI->m_status == "Married") selected @endif>Married</option>
                                                            <option @if($citizenI->m_status == "Seperated") selected @endif>Seperated</option>
                                                            <option @if($citizenI->m_status == "Widow") selected @endif>Widow</option>
                                                        </select>
                                                    </div> 
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">6. Gender/Sex</div>
                                                        <select type="text" name="gender" class="form-control mt2" data-update="gender" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                            <option value="">Gender/Sex</option>
                                                            <option @if($citizenI->gender == "Male") selected @endif>Male</option>
                                                            <option @if($citizenI->gender == "Female") selected @endif>Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">7. Contact Number</div>
                                                        <input type="number" name="contact" value="{{ $citizenI->contact }}" class="form-control mt2" data-update="contact" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">8. Email Address</div>
                                                        <input type="email" name="email" value="{{ $citizenI->email }}" class="form-control mt2" data-update="email" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">9. Religion</div>
                                                        <select type="text" name="religion" class="form-control mt2" data-update="religion" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                            <option value="">Religion</option>
                                                            <option value="Roman Catholic"  @if($citizenI->religion == "Roman Catholic") selected @endif>Roman Catholic</option>
                                                            <option value="Protestant"  @if($citizenI->religion == "Protestant") selected @endif>Protestant</option>
                                                            <option value="Islam"  @if($citizenI->religion == "Islam") selected @endif>Islam</option>
                                                            <option value="Buddhism"  @if($citizenI->religion == "Buddhism") selected @endif>Buddhism</option>
                                                            <option value="Iglesia ni Cristo"  @if($citizenI->religion == "Iglesia ni Cristo") selected @endif>Iglesia ni Cristo</option>
                                                            <option value="Other"  @if($citizenI->religion == "Other") selected @endif>Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">10. Ethnic Origin</div>
                                                        <input type="text" name="ethic_org" value="{{ $citizenI->ethic_org }}" class="form-control mt2" data-update="ethic_org" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div> 
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">15. Philhealth</div>
                                                        <input type="text" name="ph" value="{{ $citizenI->ph }}" class="form-control mt2" data-update="ph" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">16. SC Ass. / Org ID No</div>
                                                        <input type="text" name="sc_ass" value="{{ $citizenI->sc_ass }}" class="form-control mt2" data-update="sc_ass" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">17. Other Gov't. ID</div>
                                                        <input type="text" name="other_gov" value="{{ $citizenI->other_gov }}" class="form-control mt2" data-update="other_gov" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">18. Capability to Travel</div>
                                                        <input type="checkbox" id="camp_travel" name="camp_travel" class="checkbox mt2" value="0" @if($citizenI->camp_travel == "0") checked @endif data-update="camp_travel" data-model="CitizenI" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Yes</strong>
                                                        <input type="checkbox" id="camp_travel" name="camp_travel" class="checkbox mt2" value="1" @if($citizenI->camp_travel == "1") checked @endif data-update="camp_travel" data-model="CitizenI" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">No</strong>
                                                    </div>  
                                                </div> 
                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">2. Address</div>
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Region </span>
                                                        <select id="regionSelect" name="region" class="form-control mb-1" data-update="region" data-model="CitizenI" data-cid="{{ $citizen->id }}" required>
                                                            <option value="">Select Region</option>
                                                            <option value="NCR" @if($citizenI->region == "NCR") selected @endif>NCR</option>
                                                            <option value="CAR" @if($citizenI->region == "CAR") selected @endif>CAR</option>
                                                            <option value="Region1" @if($citizenI->region == "Region1") selected @endif>Region I</option>
                                                            <option value="Region2" @if($citizenI->region == "Region2") selected @endif>Region II</option>
                                                            <option value="Region3" @if($citizenI->region == "Region3") selected @endif>Region III</option>
                                                            <option value="Region4A" @if($citizenI->region == "Region4A") selected @endif>Region IV-A</option>
                                                            <option value="Region4B" @if($citizenI->region == "Region4B") selected @endif>Region IV-B</option>
                                                            <option value="Region5" @if($citizenI->region == "Region5") selected @endif>Region V</option>
                                                            <option value="Region6" @if($citizenI->region == "Region6") selected @endif>Region VI</option>
                                                            <option value="Region7" @if($citizenI->region == "Region7") selected @endif>Region VII</option>
                                                            <option value="Region8" @if($citizenI->region == "Region8") selected @endif>Region VIII</option>
                                                            <option value="Region9" @if($citizenI->region == "Region9") selected @endif>Region IX</option>
                                                            <option value="Region10" @if($citizenI->region == "Region10") selected @endif>Region X</option>
                                                            <option value="Region11" @if($citizenI->region == "Region11") selected @endif>Region XI</option>
                                                            <option value="Region12" @if($citizenI->region == "Region12") selected @endif>Region XII</option>
                                                            <option value="Region13" @if($citizenI->region == "Region13") selected @endif>Region XIII</option>
                                                            <option value="BARMM" @if($citizenI->region == "BARMM") selected @endif>BARMM</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Province: </span>
                                                        <select  id="provinceSelect" name="province" class="form-control mb-1" onchange="provinceFun(this.value)" data-update="province" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                            @if($citizenI->province != "") 
                                                            <option value="{{ $citizenI->province }}">{{ $citizenI->province }}</option>
                                                            @else
                                                            <option value="">Select Province</option>
                                                            @endif  
                                                        </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">City/Municipality: </span>
                                                        <select id="citySelect" name="city_mun" class="form-control mb-1" onchange="provinceFun(this.value)" data-update="city_mun" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                            @if($citizenI->city_mun != "") 
                                                            <option value="{{ $citizenI->city_mun }}">{{ $citizenI->city_mun }}</option>
                                                            @else
                                                            <option value="">Select City/Municipality</option>
                                                            @endif
                                                        </select>
                                                    </div> 
                                                    <div class="col-3">
                                                        <span class="label">Barangay </span>
                                                        <input type="text" name="brgy" value="{{ $citizenI->brgy }}" class="form-control mt2" data-update="brgy" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-8">
                                                        <span class="label">House No./Zone/Purok/Sitio</span>
                                                        <input type="text" name="house_purok" value="{{ $citizenI->house_purok }}" class="form-control mt2" data-update="house_purok" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-4">
                                                        <span class="label">Street </span>
                                                        <input type="text" name="street" value="{{ $citizenI->street }}" class="form-control mt2" data-update="street" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3" style="margin-top: 28px;">
                                                        <div class="p-1 bg-info gen-label mb-2">11. Language Spoken </div>
                                                        <input type="text" name="lang_spoke" value="{{ $citizenI->lang_spoke }}" class="form-control mb-1" data-update="lang_spoke" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3" style="margin-top: 28px;">
                                                        <div class="p-1 bg-info gen-label mb-2">12. OSCA ID Number</div>
                                                        <input type="text" name="osca_idnum" value="{{ $citizenI->osca_idnum }}" class="form-control mb-1" data-update="osca_idnum" data-model="CitizenI" data-cid="{{ $citizen->id }}" readonly>
                                                    </div>
                                                    <div class="col-3" style="margin-top: 28px;">
                                                        <div class="p-1 bg-info gen-label mb-2">13. GSIS/SSS</div>
                                                        <input type="text" name="gsis_sss" value="{{ $citizenI->gsis_sss }}" class="form-control mb-1" data-update="gsis_sss" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3" style="margin-top: 28px;">
                                                        <div class="p-1 bg-info gen-label mb-2">14. TIN</div>
                                                        <input type="text" name="tin" value="{{ $citizenI->tin }}" class="form-control mb-1" data-update="tin" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-6 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">19. Service/ Business/ Employment (specify)</div>
                                                        <input type="text" name="sbe" value="{{ $citizenI->sbe }}" class="form-control mb-1" data-update="sbe" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div> 
                                                    <div class="col-6 mt-2">
                                                        <div class="p-1 bg-info gen-label mb-2">20. Current Pension (specify)</div>
                                                        <input type="text" name="curr_pension" value="{{ $citizenI->curr_pension }}" class="form-control mb-1" data-update="curr_pension" data-model="CitizenI" data-cid="{{ $citizen->id }}">
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-six-dos" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">II. FAMILY COMPOSITION</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row col-12">
                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">21. Name of Spouse</div>
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Last Name </span>
                                                        <input type="text" name="spouse_lname" value="{{ $citizenII->spouse_lname }}" class="form-control" data-update="spouse_lname" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">First Name </span>
                                                        <input type="text" name="spouse_fname" value="{{ $citizenII->spouse_fname }}" class="form-control" data-update="spouse_fname" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Middle Name </span>
                                                        <input type="text" name="spouse_mname" value="{{ $citizenII->spouse_mname }}" class="form-control" data-update="spouse_mname" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Extension (Jr,Sr)</span>
                                                        <input type="text" name="spouse_ext" value="{{ $citizenII->spouse_ext }}" class="form-control" data-update="spouse_ext" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>    
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">22. Father's Name</div>
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Last Name </span>
                                                        <input type="text" name="father_lname" value="{{ $citizenII->father_lname }}" class="form-control" data-update="father_lname" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">First Name </span>
                                                        <input type="text" name="father_fname" value="{{ $citizenII->father_fname }}" class="form-control" data-update="father_fname" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Middle Name </span>
                                                        <input type="text" name="father_mname" value="{{ $citizenII->father_mname }}" class="form-control" data-update="father_mname" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Extension (Jr,Sr)</span>
                                                        <input type="text" name="father_ext" value="{{ $citizenII->father_ext }}" class="form-control" data-update="father_ext" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>     
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">23. Mother's Maiden Name</div>
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Last Name </span>
                                                        <input type="text" name="mother_lname" value="{{ $citizenII->mother_lname }}" class="form-control" data-update="mother_lname" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">First Name </span>
                                                        <input type="text" name="mother_fname" value="{{ $citizenII->mother_fname }}" class="form-control" data-update="mother_fname" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Middle Name </span>
                                                        <input type="text" name="mother_mname" value="{{ $citizenII->mother_mname }}" class="form-control" data-update="mother_mname" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Extension (Jr,Sr)</span>
                                                        <input type="text" name="mother_ext" value="{{ $citizenII->mother_ext }}" class="form-control" data-update="mother_ext" data-model="CitizenII" data-cid="{{ $citizen->id }}">
                                                    </div>      
                                                </div>
                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">24. Child(ren)</div>
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Full Name </span>
                                                        <input type="text" name="child_fname" value="{{ explode(',', $citizenII->child_fname)[0] }}" class="form-control" data-update="child_fname" data-model="CitizenII" data-array="0" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Occupation </span>
                                                        <input type="text" name="child_occup" value="{{ explode(',', $citizenII->child_occup)[0] }}" class="form-control" data-update="child_occup" data-model="CitizenII" data-array="0" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Income </span>
                                                        <input type="number" name="child_income" value="{{ explode(',', $citizenII->child_income)[0] }}" class="form-control" data-update="child_income" data-model="CitizenII" data-array="0" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-1">
                                                        <span class="label">Age</span>
                                                        <input type="number" name="child_age" value="{{ explode(',', $citizenII->child_age)[0] }}" class="form-control" data-update="child_age" data-model="CitizenII" data-array="0" data-cid="{{ $citizen->id }}">
                                                    </div> 
                                                    <div class="col-2">
                                                        <span class="label">Working</span><br>
                                                        <input type="checkbox" id="checkbox-1" name="child_working" class="checkbox checkbox-1 mt2" value="0" @if(explode(',', $citizenII->child_working)[0]  == "0") checked @endif data-update="child_working" data-array="0" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Yes</strong>
                                                        <input type="checkbox" id="checkbox-1" name="child_working" class="checkbox checkbox-1 mt2" value="1" @if(explode(',', $citizenII->child_working)[0]  == "1") checked @endif data-update="child_working" data-array="0" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">No</strong    >
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" name="child_fname" value="{{ explode(',', $citizenII->child_fname)[1] }}"  class="form-control" data-update="child_fname" data-model="CitizenII" data-array="1" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" name="child_occup" value="{{ explode(',', $citizenII->child_occup)[1] }}"  class="form-control" data-update="child_occup" data-model="CitizenII" data-array="1" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="number" name="child_income" value="{{ explode(',', $citizenII->child_income)[1] }}" class="form-control" data-update="child_income" data-model="CitizenII" data-array="1" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-1">
                                                        <input type="number" name="child_age" value="{{ explode(',', $citizenII->child_age)[1] }}" class="form-control" data-update="child_age" data-model="CitizenII" data-array="1" data-cid="{{ $citizen->id }}">
                                                    </div> 
                                                    <div class="col-2">
                                                        <input type="checkbox" name="child_working" class="checkbox mt2" value="0" @if(explode(',', $citizenII->child_working)[1]  == "0") checked @endif data-update="child_working" data-array="1" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Yes</strong>
                                                        <input type="checkbox" name="child_working" class="checkbox mt2" value="1" @if(explode(',', $citizenII->child_working)[1]  == "1") checked @endif data-update="child_working" data-array="1" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">No</strong    >
                                                    </div>

                                                    <div class="col-3">
                                                        <input type="text" name="child_fname" value="{{ explode(',', $citizenII->child_fname)[2] }}" class="form-control" data-update="child_fname" data-model="CitizenII" data-array="2" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" name="child_occup" value="{{ explode(',', $citizenII->child_occup)[2] }}" class="form-control" data-update="child_occup" data-model="CitizenII" data-array="2" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="number" name="child_income" value="{{ explode(',', $citizenII->child_income)[2] }}" class="form-control" data-update="child_income" data-model="CitizenII" data-array="2" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-1">
                                                        <input type="number" name="child_age" value="{{ explode(',', $citizenII->child_age)[2] }}" class="form-control" data-update="child_age" data-model="CitizenII" data-array="2" data-cid="{{ $citizen->id }}">
                                                    </div> 
                                                    <div class="col-2">
                                                        <input type="checkbox" name="child_working" class="checkbox mt2" value="0" @if(explode(',', $citizenII->child_working)[2]  == "0") checked @endif data-update="child_working" data-array="2" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Yes</strong>
                                                        <input type="checkbox" name="child_working" class="checkbox mt2" value="1" @if(explode(',', $citizenII->child_working)[2]  == "1") checked @endif data-update="child_working" data-array="2" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">No</strong    >
                                                    </div>

                                                    <div class="col-3">
                                                        <input type="text" name="child_fname" value="{{ explode(',', $citizenII->child_fname)[3] }}" class="form-control" data-update="child_fname" data-model="CitizenII" data-array="3" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" name="child_occup" value="{{ explode(',', $citizenII->child_occup)[3] }}" class="form-control" data-update="child_occup" data-model="CitizenII" data-array="3" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="number" name="child_income" value="{{ explode(',', $citizenII->child_income)[3] }}" class="form-control" data-update="child_income" data-model="CitizenII" data-array="3" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-1">
                                                        <input type="number" name="child_age" value="{{ explode(',', $citizenII->child_age)[3] }}" class="form-control" data-update="child_age" data-model="CitizenII" data-array="3" data-cid="{{ $citizen->id }}">
                                                    </div> 
                                                    <div class="col-2">
                                                        <input type="checkbox" name="child_working" class="checkbox mt2" value="0" @if(explode(',', $citizenII->child_working)[3]  == "0") checked @endif data-update="child_working" data-array="3" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Yes</strong>
                                                        <input type="checkbox" name="child_working" class="checkbox mt2" value="1" @if(explode(',', $citizenII->child_working)[3]  == "1") checked @endif data-update="child_working" data-array="3" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">No</strong    >
                                                    </div>

                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">25. Other Dependents</div>
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Full Name </span>
                                                        <input type="text" name="depend_fname" value="{{ explode(',', $citizenII->depend_fname)[0] }}" class="form-control" data-update="depend_fname" data-model="CitizenII" data-array="0" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Occupation </span>
                                                        <input type="text" name="depend_occup" value="{{ explode(',', $citizenII->depend_occup)[0] }}" class="form-control" data-update="depend_occup" data-model="CitizenII" data-array="0" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <span class="label">Income </span>
                                                        <input type="number" name="depend_income" value="{{ explode(',', $citizenII->depend_income)[0] }}" class="form-control" data-update="depend_income" data-model="CitizenII" data-array="0" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-1">
                                                        <span class="label">Age</span>
                                                        <input type="number" name="depend_age" value="{{ explode(',', $citizenII->depend_age)[0] }}" class="form-control" data-update="depend_age" data-model="CitizenII" data-array="0" data-cid="{{ $citizen->id }}">
                                                    </div> 
                                                    <div class="col-2">
                                                        <span class="label">Working</span><br>
                                                        <input type="checkbox" name="depend_working" class="checkbox mt2" value="0" @if(explode(',', $citizenII->depend_working)[0] == "0") checked @endif data-update="depend_working" data-array="0" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Yes</strong>
                                                        <input type="checkbox" name="depend_working" class="checkbox mt2" value="1" @if(explode(',', $citizenII->depend_working)[0] == "1") checked @endif data-update="depend_working" data-array="0" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">No</strong    >
                                                    </div>
                                                    
                                                    <div class="col-3">
                                                        <input type="text" name="depend_fname" value="{{ explode(',', $citizenII->depend_fname)[1] }}" class="form-control" data-update="depend_fname" data-model="CitizenII" data-array="1" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" name="depend_occup" value="{{ explode(',', $citizenII->depend_occup)[1] }}" class="form-control" data-update="depend_occup" data-model="CitizenII" data-array="1" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="number" name="depend_income" value="{{ explode(',', $citizenII->depend_income)[1] }}" class="form-control" data-update="depend_income" data-model="CitizenII" data-array="1" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-1">
                                                        <input type="number" name="depend_age" value="{{ explode(',', $citizenII->depend_age)[1] }}" class="form-control" data-update="depend_age" data-model="CitizenII" data-array="1" data-cid="{{ $citizen->id }}">
                                                    </div> 
                                                    <div class="col-2">
                                                        <input type="checkbox" name="depend_working" class="checkbox mt2" value="0" @if(explode(',', $citizenII->depend_working)[1] == "0") checked @endif data-update="depend_working" data-array="1" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Yes</strong>
                                                        <input type="checkbox" name="depend_working" class="checkbox mt2" value="1" @if(explode(',', $citizenII->depend_working)[1] == "1") checked @endif data-update="depend_working" data-array="1" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">No</strong    >
                                                    </div>

                                                    <div class="col-3">
                                                        <input type="text" name="depend_fname" value="{{ explode(',', $citizenII->depend_fname)[2] }}" class="form-control" data-update="depend_fname" data-model="CitizenII" data-array="2" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" name="depend_occup" value="{{ explode(',', $citizenII->depend_occup)[2] }}" class="form-control" data-update="depend_occup" data-model="CitizenII" data-array="2" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="number" name="depend_income" value="{{ explode(',', $citizenII->depend_income)[2] }}" class="form-control" data-update="depend_income" data-model="CitizenII" data-array="2" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-1">
                                                        <input type="number" name="depend_age" value="{{ explode(',', $citizenII->depend_age)[2] }}" class="form-control" data-update="depend_age" data-model="CitizenII" data-array="2" data-cid="{{ $citizen->id }}">
                                                    </div> 
                                                    <div class="col-2">
                                                        <input type="checkbox" name="depend_working" class="checkbox mt2" value="0" @if(explode(',', $citizenII->depend_working)[2] == "0") checked @endif data-update="depend_working" data-array="2" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Yes</strong>
                                                        <input type="checkbox" name="depend_working" class="checkbox mt2" value="1" @if(explode(',', $citizenII->depend_working)[2] == "1") checked @endif data-update="depend_working" data-array="2" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">No</strong    >
                                                    </div>

                                                    <div class="col-3">
                                                        <input type="text" name="depend_fname" value="{{ explode(',', $citizenII->depend_fname)[3] }}" class="form-control" data-update="depend_fname" data-model="CitizenII" data-array="3" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" name="depend_occup" value="{{ explode(',', $citizenII->depend_occup)[3] }}" class="form-control" data-update="depend_occup" data-model="CitizenII" data-array="3" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="number" name="depend_income" value="{{ explode(',', $citizenII->depend_income)[3] }}" class="form-control" data-update="depend_income" data-model="CitizenII" data-array="3" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-1">
                                                        <input type="number" name="depend_age" value="{{ explode(',', $citizenII->depend_age)[3] }}" class="form-control" data-update="depend_age" data-model="CitizenII" data-array="3" data-cid="{{ $citizen->id }}">
                                                    </div> 
                                                    <div class="col-2">
                                                        <input type="checkbox" name="depend_working" class="checkbox mt2" value="0" @if(explode(',', $citizenII->depend_working)[3] == "0") checked @endif data-update="depend_working" data-array="3" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Yes</strong>
                                                        <input type="checkbox" name="depend_working" class="checkbox mt2" value="1" @if(explode(',', $citizenII->depend_working)[3] == "1") checked @endif data-update="depend_working" data-array="3" data-model="CitizenII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">No</strong    >
                                                    </div>
                                                    
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-six-tres" role="tabpanel" aria-labelledby="custom-tabs-six-tres-tab">
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">III. EDUCATION / HR PROFILE</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row col-12">
                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">26. Educational Attainment</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="educ_attain" name="educ_attain" value="0" @if(explode(',', $citizenIII->educ_attain)[0]  == "0") checked @endif  data-update="educ_attain" data-array="0" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Elementary Level</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="educ_attain" name="educ_attain" value="1" @if(explode(',', $citizenIII->educ_attain)[1]  == "1") checked @endif  data-update="educ_attain" data-array="1" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Elementary Graduate</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="educ_attain" name="educ_attain" value="2" @if(explode(',', $citizenIII->educ_attain)[2]  == "2") checked @endif  data-update="educ_attain" data-array="2" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">High School Level</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="educ_attain" name="educ_attain" value="3" @if(explode(',', $citizenIII->educ_attain)[3]  == "3") checked @endif  data-update="educ_attain" data-array="3" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">High School Graduate</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="educ_attain" name="educ_attain" value="4" @if(explode(',', $citizenIII->educ_attain)[4]  == "4") checked @endif data-update="educ_attain" data-array="4" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">College Level</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="educ_attain" name="educ_attain" value="5" @if(explode(',', $citizenIII->educ_attain)[5]  == "5") checked @endif  data-update="educ_attain" data-array="5" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">College Graduate</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="educ_attain" name="educ_attain" value="6" @if(explode(',', $citizenIII->educ_attain)[6]  == "6") checked @endif  data-update="educ_attain" data-array="6" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Post Graduate</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="educ_attain" name="educ_attain" value="7" @if(explode(',', $citizenIII->educ_attain)[7]  == "7") checked @endif  data-update="educ_attain" data-array="7" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Vocational</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="educ_attain" name="educ_attain" value="8" @if(explode(',', $citizenIII->educ_attain)[8]  == "8") checked @endif  data-update="educ_attain" data-array="8" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Not Attended School</strong>
                                                    </div>
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">28. Share Skill (Community Service)</div>
                                                    </div>
                                                    <div colspan="3" class="col-12">
                                                        <input type="text" name="share_skill" class="form-control" value="{{ explode(',', $citizenIII->share_skill)[0] }}" data-update="share_skill" data-model="CitizenIII" data-array="0" placeholder="Share Skill" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div colspan="3" class="col-12">
                                                        <input type="text" name="share_skill" class="form-control mt-1" value="{{ explode(',', $citizenIII->share_skill)[1] }}" data-update="share_skill" data-model="CitizenIII" data-array="1" placeholder="Share Skill" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div colspan="3" class="col-12">
                                                        <input type="text" name="share_skill" class="form-control mt-1" value="{{ explode(',', $citizenIII->share_skill)[2] }}" data-update="share_skill" data-model="CitizenIII" data-array="2" placeholder="Share Skill" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                </div>
                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">27. Areas of Specialization / Technical Skills (Check all applicable)</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="0" @if(explode(',', $citizenIII->area_techskill)[0]  == "0") checked @endif  data-update="area_techskill" data-array="0" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Medical</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="1" @if(explode(',', $citizenIII->area_techskill)[1]  == "1") checked @endif  data-update="area_techskill" data-array="1" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Teaching</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="2" @if(explode(',', $citizenIII->area_techskill)[2]  == "2") checked @endif  data-update="area_techskill" data-array="2" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Legal Services</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="3" @if(explode(',', $citizenIII->area_techskill)[3]  == "3") checked @endif  data-update="area_techskill" data-array="3" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Dental</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="4" @if(explode(',', $citizenIII->area_techskill)[4]  == "4") checked @endif  data-update="area_techskill" data-array="4" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Counseling</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="5" @if(explode(',', $citizenIII->area_techskill)[5]  == "5") checked @endif  data-update="area_techskill" data-array="5" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Farming</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="6"  @if(explode(',', $citizenIII->area_techskill)[6]  == "6") checked @endif  data-update="area_techskill" data-array="6" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Fishing</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="7"  @if(explode(',', $citizenIII->area_techskill)[7]  == "7") checked @endif  data-update="area_techskill" data-array="7" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Cooking</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="8"  @if(explode(',', $citizenIII->area_techskill)[8]  == "8") checked @endif  data-update="area_techskill" data-array="8" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Arts</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="9"  @if(explode(',', $citizenIII->area_techskill)[9]  == "9") checked @endif  data-update="area_techskill" data-array="9" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Engineering</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="10"  @if(explode(',', $citizenIII->area_techskill)[10]  == "10") checked @endif  data-update="area_techskill" data-array="10" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Carpenter</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="11"  @if(explode(',', $citizenIII->area_techskill)[11]  == "11") checked @endif  data-update="area_techskill" data-array="11" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Plumber</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="12"  @if(explode(',', $citizenIII->area_techskill)[12]  == "12") checked @endif  data-update="area_techskill" data-array="12" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Barber</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="13"  @if(explode(',', $citizenIII->area_techskill)[13]  == "13") checked @endif  data-update="area_techskill" data-array="13" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Mason</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="14"  @if(explode(',', $citizenIII->area_techskill)[14]  == "14") checked @endif  data-update="area_techskill" data-array="14" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Sapatero</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="15"  @if(explode(',', $citizenIII->area_techskill)[15]  == "15") checked @endif  data-update="area_techskill" data-array="15" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Evangelization</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="16"  @if(explode(',', $citizenIII->area_techskill)[16]  == "16") checked @endif  data-update="area_techskill" data-array="16" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Tailor</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="17"  @if(explode(',', $citizenIII->area_techskill)[17]  == "17") checked @endif  data-update="area_techskill" data-array="17" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Chef/Cook</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="area_techskill" name="area_techskill" value="18"  @if(explode(',', $citizenIII->area_techskill)[18]  == "18") checked @endif  data-update="area_techskill" data-array="18" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Millwright</strong>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="area_techskill" class="form-control" value="{{ explode(',', $citizenIII->area_techskill)[19] }}" data-update="area_techskill" data-model="CitizenIII" data-array="19" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                </div>
                                                
                                                <div class="row col-12">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label" style="m">29. Community Service and Involvement (Check all applicable)</div>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="comm_serveinv" name="comm_serveinv" value="0" @if(explode(',', $citizenIII->comm_serveinv)[0]  == "0") checked @endif  data-update="comm_serveinv" data-array="0" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Medical</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="comm_serveinv" name="comm_serveinv" value="1" @if(explode(',', $citizenIII->comm_serveinv)[1]  == "1") checked @endif  data-update="comm_serveinv" data-array="1" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Resource Voluntee</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="comm_serveinv" name="comm_serveinv" value="2" @if(explode(',', $citizenIII->comm_serveinv)[2]  == "2") checked @endif  data-update="comm_serveinv" data-array="2" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Community Beautification</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="comm_serveinv" name="comm_serveinv" value="3" @if(explode(',', $citizenIII->comm_serveinv)[3]  == "3") checked @endif  data-update="comm_serveinv" data-array="3" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Community / Organization Leader</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="comm_serveinv" name="comm_serveinv" value="4" @if(explode(',', $citizenIII->comm_serveinv)[4]  == "4") checked @endif  data-update="comm_serveinv" data-array="4" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Dental</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="comm_serveinv" name="comm_serveinv" value="5" @if(explode(',', $citizenIII->comm_serveinv)[5]  == "5") checked @endif  data-update="comm_serveinv" data-array="5" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Friendly Visits</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="comm_serveinv" name="comm_serveinv" value="6" @if(explode(',', $citizenIII->comm_serveinv)[6]  == "6") checked @endif  data-update="comm_serveinv" data-array="6" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Neighborhood Support Services</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="comm_serveinv" name="comm_serveinv" value="7" @if(explode(',', $citizenIII->comm_serveinv)[7]  == "7") checked @endif  data-update="comm_serveinv" data-array="7" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Legal Services</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="comm_serveinv" name="comm_serveinv" value="8" @if(explode(',', $citizenIII->comm_serveinv)[8]  == "8") checked @endif  data-update="comm_serveinv" data-array="8" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Religious</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="comm_serveinv" name="comm_serveinv" value="9" @if(explode(',', $citizenIII->comm_serveinv)[9]  == "9") checked @endif  data-update="comm_serveinv" data-array="9" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Counseling / Referral</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="comm_serveinv" name="comm_serveinv" value="10" @if(explode(',', $citizenIII->comm_serveinv)[10]  == "10") checked @endif  data-update="comm_serveinv" data-array="10" data-model="CitizenIII" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Sponsorship</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" name="comm_serveinv" class="form-control" value="{{ explode(',', $citizenIII->comm_serveinv)[11] }}" data-update="comm_serveinv" data-model="CitizenIII" data-array="11" placeholder="Others, specify" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                </div>
                                            </div> 
                                        </div> 
                                    </div> 
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-six-quatro" role="tabpanel" aria-labelledby="custom-tabs-six-quatro-tab">
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">IV. DEPENDENCY PROFILE</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row col-12">
                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">30. Living/Residing with (check all applicable)</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="living_reside" name="living_reside" value="0" @if(explode(',', $citizenBck->living_reside)[0]  == "0") checked @endif  data-update="living_reside" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Alone</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="living_reside" name="living_reside" value="1" @if(explode(',', $citizenBck->living_reside)[1]  == "1") checked @endif  data-update="living_reside" data-array="1" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Grand Child(ren)</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="living_reside" name="living_reside" value="2" @if(explode(',', $citizenBck->living_reside)[2]  == "2") checked @endif  data-update="living_reside" data-array="2" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Common Law Spouse</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="living_reside" name="living_reside" value="3" @if(explode(',', $citizenBck->living_reside)[3]  == "3") checked @endif  data-update="living_reside" data-array="3" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Spouse</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="living_reside" name="living_reside" value="4" @if(explode(',', $citizenBck->living_reside)[4]  == "4") checked @endif  data-update="living_reside" data-array="4" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">In-law(s)</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="living_reside" name="living_reside" value="5" @if(explode(',', $citizenBck->living_reside)[5]  == "5") checked @endif  data-update="living_reside" data-array="5" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Care Institution</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="living_reside" name="living_reside" value="6" @if(explode(',', $citizenBck->living_reside)[6]  == "6") checked @endif  data-update="living_reside" data-array="6" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Child(ren)</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="living_reside" name="living_reside" value="7" @if(explode(',', $citizenBck->living_reside)[7]  == "7") checked @endif  data-update="living_reside" data-array="7" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; "> Relative(s)</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="living_reside" name="living_reside" value="8" @if(explode(',', $citizenBck->living_reside)[8]  == "8") checked @endif  data-update="living_reside" data-array="8" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; "> Friend(s)</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="living_reside" class="form-control" value="{{ explode(',', $citizenBck->living_reside)[9] }}" data-update="living_reside" data-model="CitizenBck" data-array="9" placeholder="Others, specify" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                </div>

                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">31. Household Condition</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="house_cond" name="house_cond" value="0" @if(explode(',', $citizenBck->house_cond)[0]  == "0") checked @endif  data-update="house_cond" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Alone</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="house_cond" name="house_cond" value="1" @if(explode(',', $citizenBck->house_cond)[1]  == "1") checked @endif  data-update="house_cond" data-array="1" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Grand Child(ren)</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="house_cond" name="house_cond" value="2" @if(explode(',', $citizenBck->house_cond)[2]  == "2") checked @endif  data-update="house_cond" data-array="2" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Common Law Spouse</strong>
                                                    </div>

                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="house_cond" name="house_cond" value="3" @if(explode(',', $citizenBck->house_cond)[3]  == "3") checked @endif  data-update="house_cond" data-array="3" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Spouse</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="house_cond" name="house_cond" value="4" @if(explode(',', $citizenBck->house_cond)[4]  == "4") checked @endif  data-update="house_cond" data-array="4" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">In-law(s)</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="house_cond" name="house_cond" value="5" @if(explode(',', $citizenBck->house_cond)[5]  == "5") checked @endif  data-update="house_cond" data-array="5" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Care Institution</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="house_cond" class="form-control" value="{{ explode(',', $citizenBck->house_cond)[6] }}" data-update="house_cond" data-model="CitizenBck" data-array="6" placeholder="Others, specify" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-six-singko" role="tabpanel" aria-labelledby="custom-tabs-six-singko-tab">
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">V. ECONOMIC PROFILE</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row col-12">
                                                <div class="row col-12">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">32. Source of Income and Assistance (Check all applicable)</div>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="source_inass" name="source_inass" value="0" @if(explode(',', $citizenBck->source_inass)[0]  == "0") checked @endif  data-update="source_inass" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Own earnings, salary / wages</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="source_inass" name="source_inass" value="1" @if(explode(',', $citizenBck->source_inass)[1]  == "1") checked @endif  data-update="source_inass" data-array="1" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Own Pension</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="source_inass" name="source_inass" value="2" @if(explode(',', $citizenBck->source_inass)[2]  == "2") checked @endif  data-update="source_inass" data-array="2" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Stocks / Dividends</strong>
                                                    </div>

                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="source_inass" name="source_inass" value="3" @if(explode(',', $citizenBck->source_inass)[3]  == "3") checked @endif  data-update="source_inass" data-array="3" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Dependent on children / relatives</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="source_inass" name="source_inass" value="4" @if(explode(',', $citizenBck->source_inass)[4]  == "4") checked @endif  data-update="source_inass" data-array="4" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Spouse's salary</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="source_inass" name="source_inass" value="5" @if(explode(',', $citizenBck->source_inass)[5]  == "5") checked @endif  data-update="source_inass" data-array="5" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Insurance</strong>
                                                    </div>

                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="source_inass" name="source_inass" value="6" @if(explode(',', $citizenBck->source_inass)[6]  == "6") checked @endif  data-update="source_inass" data-array="6" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Spouse's Pension</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="source_inass" name="source_inass" value="7" @if(explode(',', $citizenBck->source_inass)[7]  == "7") checked @endif  data-update="source_inass" data-array="7" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Rentals / sharecrops</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="source_inass" name="source_inass" value="8" @if(explode(',', $citizenBck->source_inass)[8]  == "8") checked @endif  data-update="source_inass" data-array="8" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Savings</strong>
                                                    </div>

                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="source_inass" name="source_inass" value="9" @if(explode(',', $citizenBck->source_inass)[9]  == "9") checked @endif  data-update="source_inass" data-array="9" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Livestock / orchard / farm</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="source_inass" name="source_inass" value="10" @if(explode(',', $citizenBck->source_inass)[10]  == "10") checked @endif  data-update="source_inass" data-array="10" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Fishing</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="text" name="source_inass" class="form-control" value="{{ explode(',', $citizenBck->source_inass)[11] }}" data-update="source_inass" data-model="CitizenBck" data-array="11" placeholder="Others, specify" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    
                                                </div>

                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">33. Assets: Real and Immovable Properties (Check all applicable)</div>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="assreal_immov" name="assreal_immov" value="0" @if(explode(',', $citizenBck->assreal_immov)[0]  == "0") checked @endif  data-update="assreal_immov" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Own earnings, salary / wages</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="assreal_immov" name="assreal_immov" value="1" @if(explode(',', $citizenBck->assreal_immov)[1]  == "1") checked @endif  data-update="assreal_immov" data-array="1" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Own Pension</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="assreal_immov" name="assreal_immov" value="2" @if(explode(',', $citizenBck->assreal_immov)[2]  == "2") checked @endif  data-update="assreal_immov" data-array="2" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Stocks / Dividends</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="assreal_immov" name="assreal_immov" value="3" @if(explode(',', $citizenBck->assreal_immov)[3]  == "3") checked @endif  data-update="assreal_immov" data-array="3" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Dependent on children / relatives</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="assreal_immov" name="assreal_immov" value="4" @if(explode(',', $citizenBck->assreal_immov)[4]  == "4") checked @endif  data-update="assreal_immov" data-array="4" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Spouse's salary</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="assreal_immov" class="form-control" value="{{ explode(',', $citizenBck->assreal_immov)[5] }}" data-update="assreal_immov" data-model="CitizenBck" data-array="5" placeholder="Others, specify" data-cid="{{ $citizen->id }}">
                                                    </div>

                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">35. Monthly Income (in Philippine Peso)</div>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="month_inc" name="month_inc" value="0" @if(explode(',', $citizenBck->month_inc)[0]  == "0") checked @endif  data-update="month_inc" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">60,000 and above</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="month_inc" name="month_inc" value="1" @if(explode(',', $citizenBck->month_inc)[1]  == "1") checked @endif  data-update="month_inc" data-array="1" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">50,000 to 60,000</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="month_inc" name="month_inc" value="2" @if(explode(',', $citizenBck->month_inc)[2]  == "2") checked @endif  data-update="month_inc" data-array="2" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">40,000 to 50,000</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="month_inc" name="month_inc" value="3" @if(explode(',', $citizenBck->month_inc)[3]  == "3") checked @endif  data-update="month_inc" data-array="3" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">30,000 to 40,000</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="month_inc" name="month_inc" value="4" @if(explode(',', $citizenBck->month_inc)[4]  == "4") checked @endif  data-update="month_inc" data-array="4" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">20,000 to 30,000</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="month_inc" name="month_inc" value="5" @if(explode(',', $citizenBck->month_inc)[5]  == "5") checked @endif  data-update="month_inc" data-array="5" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">10,000 to 20,000</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="month_inc" name="month_inc" value="6" @if(explode(',', $citizenBck->month_inc)[6]  == "6") checked @endif  data-update="month_inc" data-array="6" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">5,000 to 10,000</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="month_inc" name="month_inc" value="7" @if(explode(',', $citizenBck->month_inc)[7]  == "7") checked @endif  data-update="month_inc" data-array="7" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">1,000 to 5,000</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="month_inc" name="month_inc" value="8" @if(explode(',', $citizenBck->month_inc)[8]  == "8") checked @endif  data-update="month_inc" data-array="8" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Below 1,000</strong>
                                                    </div>
                                                </div>

                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">34. Assets: Personal and Movable Properties</div>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="assr_permov" name="assr_permov" value="0" @if(explode(',', $citizenBck->assr_permov)[0]  == "0") checked @endif  data-update="assr_permov" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Automobile</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="assr_permov" name="assr_permov" value="1" @if(explode(',', $citizenBck->assr_permov)[1]  == "1") checked @endif  data-update="assr_permov" data-array="1" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Personal Computer</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="assr_permov" name="assr_permov" value="2" @if(explode(',', $citizenBck->assr_permov)[2]  == "2") checked @endif  data-update="assr_permov" data-array="2" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Boats</strong>
                                                    </div>
                                                    
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="assr_permov" name="assr_permov" value="3" @if(explode(',', $citizenBck->assr_permov)[3]  == "3") checked @endif  data-update="assr_permov" data-array="3" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Heavy Equipment</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="assr_permov" name="assr_permov" value="4" @if(explode(',', $citizenBck->assr_permov)[4]  == "4") checked @endif  data-update="assr_permov" data-array="4" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Laptops</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="assr_permov" name="assr_permov" value="5" @if(explode(',', $citizenBck->assr_permov)[5]  == "5") checked @endif  data-update="assr_permov" data-array="5" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Drones</strong>
                                                    </div>

                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="assr_permov" name="assr_permov" value="6" @if(explode(',', $citizenBck->assr_permov)[6]  == "6") checked @endif  data-update="assr_permov" data-array="6" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Motorcycle</strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="assr_permov" name="assr_permov" value="7" @if(explode(',', $citizenBck->assr_permov)[7]  == "7") checked @endif  data-update="assr_permov" data-array="7" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Mobile Phones</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="assr_permov" class="form-control" value="{{ explode(',', $citizenBck->assr_permov)[8] }}" data-update="assr_permov" data-model="CitizenBck" data-array="8" placeholder="Others, specify" data-cid="{{ $citizen->id }}">
                                                    </div>

                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">36. Problems / Needs Commonly Encountered (Check all applicable)</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="prob_needs" name="prob_needs" value="0" @if(explode(',', $citizenBck->prob_needs)[0]  == "0") checked @endif  data-update="prob_needs" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Lack of income / resources</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="prob_needs" name="prob_needs" value="1" @if(explode(',', $citizenBck->prob_needs)[1]  == "1") checked @endif  data-update="prob_needs" data-array="1" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Loss of income / resources</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="prob_needs" name="prob_needs" value="2" @if(explode(',', $citizenBck->prob_needs)[2]  == "2") checked @endif  data-update="prob_needs" data-array="2" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Skills / capability training (specify)</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="prob_needs" name="prob_needs" value="3" @if(explode(',', $citizenBck->prob_needs)[3]  == "3") checked @endif  data-update="prob_needs" data-array="3" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; "> Livelihood opportunities (specify)</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="prob_needs" class="form-control" value="{{ explode(',', $citizenBck->prob_needs)[4] }}" data-update="prob_needs" data-model="CitizenBck" data-array="4" placeholder="Others, specify" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-six-seis" role="tabpanel" aria-labelledby="custom-tabs-six-seis-tab">
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">VI. HEALTH PROFILE</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row col-12">
                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">37. Medical Concern</div>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <strong class="mr-3">Blood Type : </strong>
                                                        <input type="checkbox" class="checkbox" id="med_concernchk" name="med_concern" value="1" @if(explode(',', $citizenBck->med_concern)[0]  == "1") checked @endif  data-update="med_concern" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="margin-bottom: 2px; padding-right: 25px;"> O</strong>
                                                        <input type="checkbox" class="checkbox" id="med_concernchk" name="med_concern" value="2" @if(explode(',', $citizenBck->med_concern)[0]  == "2") checked @endif  data-update="med_concern" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="margin-bottom: 2px; padding-right: 25px;"> A</strong>
                                                        <input type="checkbox" class="checkbox" id="med_concernchk" name="med_concern" value="3" @if(explode(',', $citizenBck->med_concern)[0]  == "3") checked @endif  data-update="med_concern" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="margin-bottom: 2px; padding-right: 25px;"> B</strong>
                                                        <input type="checkbox" class="checkbox" id="med_concernchk" name="med_concern" value="4" @if(explode(',', $citizenBck->med_concern)[0]  == "4") checked @endif  data-update="med_concern" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="margin-bottom: 2px; padding-right: 25px;"> AB</strong>
                                                        <input type="checkbox" class="checkbox" id="med_concernchk" name="med_concern" value="5" @if(explode(',', $citizenBck->med_concern)[0]  == "5") checked @endif  data-update="med_concern" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="margin-bottom: 2px; padding-right: 25px;"> Don't know</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" name="med_concern" class="form-control" value="{{ explode(',', $citizenBck->med_concern)[1] }}" data-update="med_concern" data-model="CitizenBck" data-array="1" placeholder="Physical Disability (specify)" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="med_concern" name="med_concern" value="2" @if(explode(',', $citizenBck->med_concern)[2]  == "2") checked @endif  data-update="med_concern" data-array="2" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Health problems / ailments</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="med_concern" name="med_concern" value="3" @if(explode(',', $citizenBck->med_concern)[3]  == "3") checked @endif  data-update="med_concern" data-array="3" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Hypertension</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="med_concern" name="med_concern" value="4" @if(explode(',', $citizenBck->med_concern)[4]  == "4") checked @endif  data-update="med_concern" data-array="4" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Arthritis / Gou</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="med_concern" name="med_concern" value="5" @if(explode(',', $citizenBck->med_concern)[5]  == "5") checked @endif  data-update="med_concern" data-array="5" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Coronary Heart Disease</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="med_concern" name="med_concern" value="6" @if(explode(',', $citizenBck->med_concern)[6]  == "6") checked @endif  data-update="med_concern" data-array="6" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Diabetes0</strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="med_concern" name="med_concern" value="7" @if(explode(',', $citizenBck->med_concern)[7]  == "7") checked @endif  data-update="med_concern" data-array="7" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Chronic Kidney Disease</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="med_concern" name="med_concern" value="8" @if(explode(',', $citizenBck->med_concern)[8]  == "8") checked @endif  data-update="med_concern" data-array="8" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Alzheimer's / Dementia</strong>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="med_concern" name="med_concern" value="9" @if(explode(',', $citizenBck->med_concern)[9]  == "9") checked @endif  data-update="med_concern" data-array="9" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Chronic Obstructive Pulmonary </strong>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="text" name="med_concern" class="form-control" value="{{ explode(',', $citizenBck->med_concern)[10] }}" data-update="med_concern" data-model="CitizenBck" data-array="10" placeholder="Physical Disability (specify)" data-cid="{{ $citizen->id }}">
                                                    </div>

                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">38. Dental Concern </div>
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="checkbox" class="checkbox" id="den_conern" name="den_conern" value="0" @if(explode(',', $citizenBck->den_conern)[0]  == "0") checked @endif  data-update="den_conern" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Needs Dental Care</strong>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="den_conern" class="form-control" value="{{ explode(',', $citizenBck->den_conern)[1] }}" data-update="den_conern" data-model="CitizenBck" data-array="1" placeholder="Others, specify" data-cid="{{ $citizen->id }}">
                                                    </div>

                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">39. Optical </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="optical" name="optical" value="0" @if(explode(',', $citizenBck->optical)[0]  == "0") checked @endif  data-update="optical" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Eye impairment </strong>
                                                    </div>
                                                    <div class="col-3">
                                                        <input type="checkbox" class="checkbox" id="optical" name="optical" value="1" @if(explode(',', $citizenBck->optical)[1]  == "1") checked @endif  data-update="optical" data-array="1" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Needs eye care</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="optical" class="form-control" value="{{ explode(',', $citizenBck->optical)[2] }}" data-update="optical" data-model="CitizenBck" data-array="2" placeholder="Other" data-cid="{{ $citizen->id }}">
                                                    </div>

                                                </div>

                                                <div class="row col-6">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">40. Hearing</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="hearing" name="hearing" value="0" @if(explode(',', $citizenBck->hearing)[0]  == "0") checked @endif  data-update="hearing" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Alzheimer's / Dementia</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="hearing" class="form-control" value="{{ explode(',', $citizenBck->hearing)[1] }}" data-update="hearing" data-model="CitizenBck" data-array="1" placeholder="Physical Disability (specify)" data-cid="{{ $citizen->id }}">
                                                    </div>

                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">41. Social / Emotional</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="soc_emo" name="soc_emo" value="0" @if(explode(',', $citizenBck->soc_emo)[0]  == "0") checked @endif  data-update="soc_emo" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Feeling neglect / rejection</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="soc_emo" name="soc_emo" value="1" @if(explode(',', $citizenBck->soc_emo)[1]  == "1") checked @endif  data-update="soc_emo" data-array="1" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Feeling helplessness / worthlessness</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="soc_emo" name="soc_emo" value="2" @if(explode(',', $citizenBck->soc_emo)[2]  == "2") checked @endif  data-update="soc_emo" data-array="2" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Feeling loneliness / isolate</strong>
                                                    </div>

                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="soc_emo" name="soc_emo" value="3" @if(explode(',', $citizenBck->soc_emo)[3]  == "3") checked @endif  data-update="soc_emo" data-array="3" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Lack leisure / recreational activities</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="soc_emo" name="soc_emo" value="4" @if(explode(',', $citizenBck->soc_emo)[4]  == "4") checked @endif  data-update="soc_emo" data-array="4" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Lack SC friendly environmenty</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="soc_emo" class="form-control" value="{{ explode(',', $citizenBck->soc_emo)[5] }}" data-update="soc_emo" data-model="CitizenBck" data-array="5" placeholder="Others, specify" data-cid="{{ $citizen->id }}">
                                                    </div>

                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">42. Area / Difficulty </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="area_diff" name="area_diff" value="0" @if(explode(',', $citizenBck->area_diff)[0]  == "0") checked @endif  data-update="area_diff" data-array="0" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Own earnings, salary / wages</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="area_diff" name="area_diff" value="1" @if(explode(',', $citizenBck->area_diff)[1]  == "1") checked @endif  data-update="area_diff" data-array="1" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Own Pension</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="checkbox" class="checkbox" id="area_diff" name="area_diff" value="2" @if(explode(',', $citizenBck->area_diff)[2]  == "2") checked @endif  data-update="area_diff" data-array="2" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px; ">Stocks / Dividends</strong>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="area_diff" class="form-control" value="{{ explode(',', $citizenBck->area_diff)[3] }}" data-update="area_diff" data-model="CitizenBck" data-array="3" placeholder="Others" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                </div>

                                                <div class="row col-12">
                                                    <div class="col-12 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">43. List of Medicines for Maintenance </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[0] }}" data-update="med_main" data-model="CitizenBck" data-array="0" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[1] }}" data-update="med_main" data-model="CitizenBck" data-array="1" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[2] }}" data-update="med_main" data-model="CitizenBck" data-array="2" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[3] }}" data-update="med_main" data-model="CitizenBck" data-array="3" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[4] }}" data-update="med_main" data-model="CitizenBck" data-array="4" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[5] }}" data-update="med_main" data-model="CitizenBck" data-array="5" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[6] }}" data-update="med_main" data-model="CitizenBck" data-array="6" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[7] }}" data-update="med_main" data-model="CitizenBck" data-array="7" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[8] }}" data-update="med_main" data-model="CitizenBck" data-array="8" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>

                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[9] }}" data-update="med_main" data-model="CitizenBck" data-array="9" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[10] }}" data-update="med_main" data-model="CitizenBck" data-array="10" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="text" name="med_main" class="form-control" value="{{ explode(',', $citizenBck->med_main)[11] }}" data-update="med_main" data-model="CitizenBck" data-array="11" placeholder="Medecine" data-cid="{{ $citizen->id }}">
                                                    </div>

                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label">44. Do you have a scheduled medical/physical check-up? </div>
                                                    </div>
                                                    <div class="col-3 mt-2">
                                                        <div class="p-1 bg-info gen-label">45. If Yes, when is it done? </div>
                                                    </div>

                                                </div>
                                                <div class="row col-6">
                                                    <div class="col-6 mt-2">
                                                        <input type="checkbox" id="med_sched" name="med_sched" class="checkbox mt2" value="0" @if($citizenBck->med_sched == "0") checked @endif data-update="med_sched" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Yes</strong>
                                                        <input type="checkbox" id="med_sched" name="med_sched" class="checkbox mt2" value="1" @if($citizenBck->med_sched == "1") checked @endif data-update="med_sched" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">No</strong>
                                                    </div>

                                                    <div class="col-6 mt-2">
                                                        <input type="checkbox" id="med_schedyes" name="med_schedyes" class="checkbox mt2" value="0" @if($citizenBck->med_schedyes == "0") checked @endif data-update="med_schedyes" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Yearly</strong>
                                                        <input type="checkbox" id="med_schedyes" name="med_schedyes" class="checkbox mt2" value="1" @if($citizenBck->med_schedyes == "1") checked @endif data-update="med_schedyes" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Every 6 months</strong>
                                                        <input type="checkbox" id="med_schedyes" name="med_schedyes" class="checkbox mt2" value="2" @if($citizenBck->med_schedyes == "2") checked @endif data-update="med_schedyes" data-model="CitizenBck" data-cid="{{ $citizen->id }}"><strong style="padding: 5px;">Others</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-seven-syete" role="tabpanel" aria-labelledby="custom-tabs-seven-syete-tab">
                                    <div class="card card-secondary">
                                        <div class="card-header">
                                            <h3 class="card-title">VII. Attachment</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row col-8">
                                                <div class="row col-12">
                                                    <div class="col-6 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">1. Signature</div>
                                                    </div>
                                                    <div class="col-6 mt-2 mb-2">
                                                        <div class="p-1 bg-info gen-label">1. Thumbmark</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="border mb-2 paper"></div>
                                                        <button class="btn btn-secondary">Start</button>
                                                        <button class="btn btn-secondary">Save</button>
                                                        <button class="btn btn-secondary">Clear</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="border mb-2 paper"></div>
                                                        <button class="btn btn-secondary">Start</button>
                                                        <button class="btn btn-secondary">Save</button>
                                                        <button class="btn btn-secondary">Clear</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('control.aside')

</div>

@endsection