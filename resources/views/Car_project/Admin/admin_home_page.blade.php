<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="icon" type="image/x-icon" href="{{ asset('IMAGE\car-logo3.png')}}">
    <link rel="stylesheet" href="{{ asset('CSS\Admin\admin.css')}}">
    <script src="{{asset('javascript\jQuery.js')}}"></script>   
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.5.1\css\all.min.css')}}">

</head>
<body>
   

    @include('Car_project/Admin/admin_header')
  

        <div class="typess">
            <a href="/cardatas_insert" class="types-div">
                <div >
                    <div id="types-div">
                        <i id="fa-ico" class="fa fa-cloud-download"></i>
                    </div>
                    <p class="types-div-p">Insert Data IN DataBase</p> 
                </div>
            </a>

            <a href="/All_Product_Data" class="types-div">           
                <div>
                    <div id="types-div">
                        <i id="fa-ico" class="fa fa-database"></i>
                    </div>
                    <p class="types-div-p">All Product Data</p> 
                </div>
            </a>
            <a href="/edit" class="types-div">
                <div>
                    <div id="types-div">
                        <i id="fa-ico" class="fa fa-edit"></i>
                    </div>
                    <p class="types-div-p">Update Data IN DataBase</p> 
                </div>
            </a>

            <a href="/cardata_delete" class="types-div">            
                    <div>
                        <div id="types-div">
                            <i id="fa-ico" class="fa fa-trash"></i>
                        </div>
                        <p class="types-div-p">Delete Data</p> 
                    </div>
                </a>









            <a href="/customer_login_list" class="types-div">
                <div>
                    <div id="types-div">
                        <i id="fa-ico" class="fa fa-address-book"></i>
                    </div>
                    <p class="types-div-p">Customer Login List</p> 
                </div>
            </a>



            <a href="/paymet_data " class="types-div">            
                    <div>
                        <div id="types-div">
                            <i id="fa-ico" class="fa fa-car"></i>
                        </div>
                        <p class="types-div-p">Purchased Car Details</p> 
                    </div>
                </a>

                
            <a href="/feedback" class="types-div">            
                    <div>
                        <div id="types-div">
                            <i id="fa-ico" class="fa fa-clipboard"></i>
                        </div>
                        <p class="types-div-p">FeedBack</p> 
                    </div>
                </a>



        </div>

            
<!-- 
    <div class="wright">
        <p>All Rights Reserved by Cost Luxury Cars</p>
        <p>&copy;2003-2024, Cost Luxury Cars.com, Inc. or its affiliates</p>
    </div>     -->
</body>
</html>