<?php

return
[

    /**
     * this is responsible for setting the default email where the admin receives
     * email each time a user creates ticket or respond to a chat. change the email to your
     * preferred email address.
     */
   'support_email' => 'support@peers.com',

   /**
    * this timezone is used to set the default timezone for chat history expiry time
    * and also chat cookie life span. the default is Africa/lagos!
    * chanage to your preferred time zone if necessary
    */
    'timezone' => 'Africa/lagos',

    /**
     * set the timer for chat history deletion, this optimizes your database !
     * when a guest cookie/session for a chat expires,
     * they are no longer eligible to view the said
     * chat, however these chats pesists in the database! forever to reduce their life span,
     * change the value on the timer.
     */
    'chatTimer' => 25,

    /**
     * this is similar to the chatTimer above, however this section can be used to
     * set the default session/cookie life span for the chat when a guest
     * user create a ticket or chat for the first time.
     */
    'chatCookieTimer' => 120

];
