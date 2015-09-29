<? class Login extends CI_Model {
	//active record code igniter
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function login($username, $password) {
		$this->db->select('salt, password_hash');
		$this->db->where('username', $username);
		$this->db->where('password_hash', $this->encrypt->sha1($password));
		$query = $this->db->get('authentication', 1);
		//do hashes in DB

		return $query->num_rows();
	}

	public function check($username)
	{
		$this->db->select('username');
		$this->db->where('username', $username);
		$query = $this->db->get('authentication', 1);

		return $query->num_rows();
	}

	public function register($username, $hash, $pwSalt, $salt) {
		$register_query = array(
   				'username' => $username ,
   				'password_hash' => $hash ,
   				'pwsalt' => $pwSalt,
   				'salt' => $salt
			);

			$this->db->insert('authentication', $register_query);
	}

}
?>
