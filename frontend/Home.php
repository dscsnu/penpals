<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo __assets; ?>src/css/home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Penpals</title>
</head>
<body>
    <div class="container">
        <div class="chat_list col-md-2 ">
            <div class="list_header">
                <img src="/assets/image/penpals_logo.png">
            </div>
            <div class="actions">
                <div id="conversations">
                </div>
                <button class="start" id="start" data-toggle="modal" data-target="#info"><i class="fa fa-plus"></i> </button>
            </div>
                <button class="end" data-toggle="modal" data-target="#logout">LOGOUT</button>
            <span class="phone-menu-button"><i class="fa fa-bars"></i></span>
        </div>
       
        <div class="convo_area col-md-10 col-sm-12">
            <div class="convo_header" >
                <div class="col-md-10 col-sm-10 col-xs-10 convo_heading parent" id="convo_heading">
                    <h2><b id="heading">Friend</b></h2>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1 parent">
                <i class="fa fa-refresh ref" id="ref"></i>
                </div>
                <div class = "col-md-1 col-sm-1 col-xs-1 parent dropdown" id="dropdown">
                    <i class="fa fa-ellipsis-v dropdown-toggle menu" data-toggle="dropdown"  aria-expanded="false"></i>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a type="button" class="btn dropdown-dropdown-content1" data-toggle="modal" data-target="#modal_nickname">Set Nickname</a>
                        <a type="button" class="btn dropdown-dropdown-content1" data-toggle="modal" data-target="#end_convo">End Conversation</a>     
                    </div>
                    
                    <div id="end_convo"  class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </form>  
                                <label style="letter-spacing: 1px;">Are you sure you want to end the conversation?</label><br>
                                    <button type ="submit" data-dismiss="modal" id ="end" style="">Yes</button>
                                    <button type="button" data-dismiss="modal">No</button>
                                </form>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                                     
                </div>
                <span class="phone-menu-button"><i class="fa fa-bars"></i></span>
            </div>

            <div class="chat parent col-md-12" id="chat">
                            
            </div>
            

            <form id="message_send">
                <div class = "message_area">
                    <div class="col-md-11 col-sm-5 col-xs-10 parent">
                        <textarea class="textbox" id="textbox" placeholder="Type a Message" name="message_body"></textarea>
                    </div>
                    <div class="col-md-1 col-sm-1 col-xs-2 parent">
                        <button class="send_btn" type = "submit"><img src="<?php echo __assets ?>image/send-icon.png" class="send_img"></button>
                    </div>  
                </div>
            </form>
        </div>
    
    </div>

    <div id="info" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body"> 
                                <button type="button" class="close" data-dismiss="modal">&times;</button>                              
                                <span id="waitlist"></span>                                
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="modal_nickname"  class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <form id = "nickname" >
                                    <label>Set Nickname:</label>
                                    <input name= "nick" placeholder = "Enter Nickname"></input>
                                    <button type ="submit" >Submit</button>
                                </form>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="logout"  class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <form method="POST" action="/action/logout">   
                                <label style="letter-spacing: 1px;">Are you sure you want to logout?</label><br>
                                    <button type ="submit" id="logout_btn">Yes</button>
                                    <button type="button" data-dismiss="modal">No</button>
                                </form>
                                    
                                </div>
                            </div>

                        </div>
                    </div>
    
   
    <script src =" <?php echo __assets ?>src/js/home.js"> </script>
</body>
</html>
