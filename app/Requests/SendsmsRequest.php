<?php namespace App\Requests;


/**
 * Class SendsmsRequest
 * @package App\Requests
 */
class SendsmsRequest
{
    /**
     * @var string
     */
    public $USERNAME = '';

      /**
       * @var string
       */
    public $PASSWORD = '';

    /**
     * @var string
     */
    public $ACTION = '';

    /**
     * @var string
     */
    public $ORIGINATOR = '';

    /**
     * @var string
     */
    public $RECIPIENT = '';

    /**
     * @var string
     */
    public $REFERENCE = '';

    /**
     * @var string
     */
    public $SCHEDULE = '';

    /**
     * @var string
     */
    public $MESSAGE_TEXT = '';

    /**
     * @var string
     */
    public $URL = '';

    /**
     * @var string
     */
    public $RECIPIENTMESSAGES = '';

    /**
     * @var string
     */
    public $REPLYTYPE = '';

    /**
     * @var string
     */
    public $REPLYPATH = '';

    /**
     * @var string
     */
    public $FILE_LIST = '';

    /**
     * @var string
     */
    public $FILE_HASH = '';

    /**
     * SendsmsRequest constructor.
     * @param string $USERNAME
     * @param string $PASSWORD
    */
    public function __construct($USERNAME, $PASSWORD)
    {
        $this->USERNAME = $USERNAME;
        $this->PASSWORD = $PASSWORD;
        $this->ACTION = 'send';
        $this->ORIGINATOR = 'shared';
    }


}