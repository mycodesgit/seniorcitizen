<style>
    .addText {
        margin-top: -10px !important;
    }
    .birthText {
        margin-top: -5px !important;
    }
    .birthTextLabel {
        margin-top: -10px !important;
    }
    .idcardLabel {
        margin-top: -1px !important;
    }
    .idnumber {
        text-decoration: underline;
        color: red !important;
    }
    .signatureLabel {
        margin-top: -10px !important;
    }
    .validLabel {
        margin-top: -5px !important;
    }
    .seniorlogo {
        margin-top: 2px;
        margin-left: 50px;
        width: 70%;
    }
    .hinologo {
        margin-top: 2px;
        margin-left: 5px;
        width: 10%;
    }
    .square {
        margin-right: 3px;
        width: 80px; 
        height: 80px; 
        border: 1px solid #000;
        background-color: #fff; 
    }
</style>

<div class="modal fade" id="modal-idcard">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">
                    <i class="fas fa-id-card"></i> Senior Citizen ID
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body" style="display: flex; justify-content: center; align-items: center;">
                <div style="width: 85.60mm; height: 53.98mm; border: 1px solid #000; border-radius: 5px;">
                    <img src="{{ asset('template/img/idheader.png') }}" class="seniorlogo">
                    <div>
                        <label class="pl-3 pt-3" style="font-size: 9pt">Name:</label>
                        <span style="font-size: 9pt; font-weight: bold; text-decoration: underline;">Eva G. Hulguin</span>
                        <div class="square float-right"></div>
                    </div>
                    <div class="addText">
                        <label class="pl-3 " style="font-size: 9pt;">Address:</label>
                        <span style="font-size: 9pt; font-weight: bold; text-decoration: underline;">Bgry. 1, Hinoba-an</span>
                    </div>
                    <div class="birthText">
                        <span class="pl-3" style="font-size: 9pt; font-weight: bold; text-decoration: underline;">Jan. 01, 2023</span>
                        <span class="" style="font-size: 9pt; font-weight: bold; text-decoration: underline; margin-left: 20px !important;">Female</span>
                        <span class="" style="font-size: 9pt; font-weight: bold; text-decoration: underline; margin-left: 30px !important;">60</span>
                    </div>
                    <div class="birthTextLabel ml-1">
                        <span class="pl-3" style="font-size: 8pt; font-style: italic;">Date of Birth</span>
                        <span class="" style="font-size: 8pt; font-style: italic; margin-left: 35px !important;">Sex</span>
                        <span class="" style="font-size: 8pt; font-style: italic; margin-left: 46px !important;">Age</span>
                    </div>
                    <div class="idcardLabel">
                        <span class="pl-3" style="font-size: 10pt; font-weight: bold; margin-left: 160px !important">ID CARD NO. <b class="idnumber">09300</b></span>
                    </div>
                    <div class="ml-1">
                        <span class="pl-3" style="font-size: 8pt; font-style: italic;"><u>_______________________</u></span>
                        <span class="" style="font-size: 8pt; font-weight: bold; margin-left: 35px !important;">Date Issued:</span>
                        <span class="" style="font-size: 8pt; font-weight: bold; text-decoration: underline;">May 16, 2023</span>
                    </div>
                    <div class="signatureLabel ml-1">
                        <span class="pl-4" style="font-size: 8pt; font-style: italic;">Signature/Thumbmark</span>
                    </div>
                    <div class="validLabel ml-1 text-center">
                        <span class="" style="font-size: 8pt; color: red">VALID ANYWHERE IN THE COUNTRY</span>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer justify-content-between">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>