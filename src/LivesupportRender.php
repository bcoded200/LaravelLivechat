<?php

namespace Coded\Codedlivechat;

use Coded\Codedlivechat\Models\support_message_store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LivesupportRender
{

    public $assign = 0;


    /**
     * Timezone for default time and date manipulation
     */

    protected function minuites()
    {
       return config('livechat.chatCookieTimer');
    }

    public static function LivechatId()
    {
        $obj = new self;
        $hash = $obj->assign . rand(200000,1000000);
        return $hash;
    }


    public static function Guestchecker()
    {
    }

    public static function SetGuestCookie()
    {
        $object = new self;

        if (request()->hasCookie('guest')) {
            return $cookies = request()->cookie('guest');
        } else {

            Cookie::queue(Cookie::make('guest', 'guest'.rand(1, 20000), $object->minuites()));

            return $cookies = request()->cookie('guest');
        }
    }

    public static function UnsetGuestCookie($cookie_name)
    {
        $object = new self;
        Cookie::queue(Cookie::forget($cookie_name));
        return true;
    }


    public static function renderCodedLiveChat()
    {


        if(Auth::check())
        {
            $countmessage =  support_message_store::where("senders_id",Auth::user()->id)->count();
        }else
        {
            $countmessage =  support_message_store::where("senders_id",request()->cookie('guest'))->count();
        }

       ?>


        <button class="open-button" onclick="openForm()">
            <img src="<?php echo  asset('codedlivechat/chat/chat3.png');  ?>" style="height:30px; width:30px;" /> &nbsp; <a href="/livechat"><b style="" class="btn btn-sm btn-success" style="width:4px; color:white; "><?php echo $countmessage; ?></b></a>


        </button>

        <div class="chat-popup" id="myForm">
            <form action="<?php echo  route('livechat.store'); ?>" method="POST" class="form-container">
                <?php echo csrf_field() ?>
                <h1>Live Chat</h1>

                <div class="form-group">
                    <label for="subject">Your Name</label>
                    <input required class="form-control" placeholder="your name..." type="text" name="name">
                </div>

                <div class="form-group">
                    <label for="subject">Your Email</label>
                    <input required class="form-control" placeholder="your email... " type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="message">Message body</label>
                    <textarea id="myeditorinstance" class="form-control" type="text" name="message" placeholder="start typing..."></textarea>
                </div>

                <div class="control-group form-group">
                    <label class="form-label">Choose Department</label>
                    <select required name="department" class="form-control select2 br-0 nice-select" data-placeholder="Choose one (with optgroup)">
                        <optgroup label="department">
                            <option disabled>--Choose Department--</option>

                            <option value="withdrawal_issue">Withdrawal Issue</option>
                            <option value="deposit_issue">Deposit Issue</option>
                            <option value="kyc_issue">Kyc Issue</option>
                            <option value="trading_issue">Trading Issue</option>
                            <option value="account_suspended">Suspension Issue</option>



                        </optgroup>
                    </select>

                </div>


                <button type="submit" class="btn btn-sm">Start Conversation</button>
                <div align="center">
                    <a href="#" style="color:green; font-family:Times;" onclick="closeForm()">Close</a>
                </div>
            </form>
        </div>


    <?php
    }

    public static function liveChatJs()
    {
        $object = new self;

    ?>
        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>
<?php
    }

    public function LiveChatStyles()
    {
        ?>
        <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        /* Button used to open the chat form - fixed at the bottom of the page */
        .open-button {
          background-color: #555;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          opacity: 0.8;
          position: fixed;
          bottom: 23px;
          right: 28px;
          width: 100px;

        }

        /* The popup chat - hidden by default */
        .chat-popup {
          display: none;
          position: fixed;
          bottom: 0;
          right: 15px;
          border: 3px solid #f1f1f1;
          z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
          max-width: 300px;
          padding: 10px;
          background-color: white;
        }

        /* Full-width textarea */
        .form-container textarea {
          width: 95%;
          padding: 15px;
          margin: 5px 0 22px 0;
          border: none;
          background: #f1f1f1;
          resize: none;
          min-height: 8px;
        }

        .form-container input {
            font-size: 16px;
            font-size: max(16px, 1em);
            font-family: inherit;
            padding: 0.25em 0.5em;
            background-color: #fff;
            border: 2px solid var(--input-border);
            border-radius: 4px;

            --input-border: #8b8a8b;
  --input-focus-h: 245;
  --input-focus-s: 100%;
  --input-focus-l: 42%;
        }

        /* When the textarea gets focus, do something */
        .form-container textarea:focus {
          background-color: #ddd;
          outline: none;
        }

        /* Set a style for the submit/send button */
        .form-container .btn {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          border: none;
          cursor: pointer;
          width: 100%;
          margin-bottom:10px;
          opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
          background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover, .open-button:hover {
          opacity: 1;
        }
        </style>
        <?php
    }
}
