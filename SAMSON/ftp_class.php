<?php
	Class FTPClient
	{
		private $connectionId; //will store our connection stream.
		private $loginOk = false; //will be useful when determining if we're properly connected.
		private $messageArray = array();
	 
		public function __construct() { }

		private function logMessage($message) //function to retrieve the message.
		{
			$this->messageArray[] = $message;
		}

		public function connect ($server, $ftpUser, $ftpPassword, $isPassive = false) //method for connecting an FTP server.
		{
		 
			// *** Set up basic connection
			$this->connectionId = ftp_connect($server);
		 
			// *** Login with username and password
			$loginResult = ftp_login($this->connectionId, $ftpUser, $ftpPassword);
		 
			// *** Sets passive mode on/off (default off)
			ftp_pasv($this->connectionId, $isPassive);
		 
			// *** Check connection
			if ((!$this->connectionId) || (!$loginResult)) {
				$this->logMessage('FTP connection has failed!');
				$this->logMessage('Attempted to connect to ' . $server . ' for user ' . $ftpUser, true);
				return false;
			} else {
				$this->logMessage('Connected to ' . $server . ', for user ' . $ftpUser);
				$this->loginOk = true;
				return true;
			}
		}
	}
?>
