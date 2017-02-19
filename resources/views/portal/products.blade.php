@extends('portal.layout.main')

<?php use Admailer\Models\BaseModel; ?>

@section('content')

   
<div class="container" style="margin-top: 100px; height: auto">
    <div class="row" >

      <div   class="col-xs-5 col-sm-5 col-md-12" >
            <div class="thumbnail full-row" style="height: 300px">
              <strong class="text-center">derived from Latin dolorem ipsum</strong>
              <div class="col-md-6">
                <img class="pull-left" src="{{ asset('/files/products/3/toshiba.jpg') }}" alt="sasasasa" style="padding: 17px;" />
                
              </div>

              <div class="col-md-6">
                  <p style="margin-left: -212px;">slorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.[citation needed]

                  The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC Latin text by Cicero, with words altered, added, and removed to make it nonsensical, improper Latin.[citation needed]

                  A variation of the ordinary lorem ipsum text has been used in typesetting since the 1960s or earlier, when it was popularized by advertisements for Letraset transfer sheets. It was introduced to the Information Age in the mid-1980s by Aldus Corporation, which employed it in graphics and word-processing templates for its desktop publishing program PageMaker.[1][not in citation given]</p>
              </div>

                
            </div> 

            <div class="thumbnail full-row" style="height: 400px">
                  <h3 class="text-center">derived from Latin dolorem ipsum</h3>
              <div class="col-md-6">
                
                  <p>slorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.[citation needed]

The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC Latin text by Cicero, with words altered, added, and removed to make it nonsensical, improper Latin.[citation needed]

A variation of the ordinary lorem ipsum text has been used in typesetting since the 1960s or earlier, when it was popularized by advertisements for Letraset transfer sheets. It was introduced to the Information Age in the mid-1980s by Aldus Corporation, which employed it in graphics and word-processing templates for its desktop publishing program PageMaker.[1][not in citation given]</p>
              </div>

              <div class="col-md-6">
                <img class="pull-right" src="{{ asset('/files/products/3/toshiba.jpg') }}" alt="sasasasa" />
              </div>

                
            </div> 


          </div>
       


      </div>
  </div> 
 
@endsection