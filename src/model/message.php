<?php

/**
 * Message
 */
class Message
{
    protected $id;
    protected $conversation_id;
    protected $user_id;
    protected $content;
    protected $created_at;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getConversationId()
    {
        return $this->conversation_id;
    }

    /**
     * @param mixed $conversation_id
     */
    public function setConversationId($conversation_id)
    {
        $this->conversation_id = $conversation_id;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }
    
    /**
     * getMessagesForConversationId
     *
     * @param  mixed $conversation_id
     * @return array
     */
    public static function getMessagesForConversationId($conversation_id): array
    {
        $db = init_db();

        $req = $db->prepare("SELECT * FROM messages WHERE conversation_id = ? ORDER BY created_at ASC");
        $req->execute([$conversation_id]);

        // Close database connection
        $db = null;

        return $req->fetchAll();
    }
    
    /**
     * createMessage
     *
     * @param  mixed $message
     * @return Message
     */
    public static function createMessage(Message $message): Message
    {
        $db = init_db();

        $req = $db->prepare("INSERT INTO messages VALUES (NULL, ?, ?, ?, CURRENT_TIME())");
        $req->execute([
            $message->getConversationId(),
            $message->getUserId(),
            $message->getContent()
        ]);

        $message->setId($db->lastInsertId());

        // Close database connection
        $db = null;

        return $message;
    }
    
    /**
     * deleteMessage
     *
     * @param  mixed $id
     * @return void
     */
    public static function deleteMessage($id)
    {
        $db = init_db();
        $req = $db->prepare("DELETE FROM messages WHERE id=?");
        $req->execute(array($id));
        $db = null;
    }
    
    /**
     * filterMessages
     *
     * @param  mixed $conversation
     * @param  mixed $search
     * @return void
     */
    public static function filterMessages($conversation, $search)
    {
        // Open database connection
        $db = init_db();
        $sql = 'SELECT m.* FROM messages AS m, conversations AS c WHERE m.conversation_id = c.id AND c.id = ? AND content LIKE ? ';
  
  
        $req = $db->prepare($sql);
        $req->execute(array($conversation, '%'.$search.'%'));
        // Close database connection
        $db = null;
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

}
