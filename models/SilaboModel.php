<?php
class SilaboModel extends Model
{
    public function set($user_data = array())
    {
        foreach ($user_data as $key => $value) {
            $$key = $value;
        }
        $this->query = "UPDATE tcatalogo SET silabo='$silabo'
								WHERE codAsignatura='$codAsignatura' AND grupo='$grupo'";
        $this->set_query();
        //UPDATE tcatalogo SET silabo='/silabo.pdf' WHERE codAsignatura='IF060AIN';
    }
    public function get($codAsignatura = '', $grupo = '')
    {
        $this->query = ($codAsignatura != '' && $grupo = '')
            ? "SELECT * FROM tcatalogo WHERE (codAsignatura = '$codAsignatura' AND grupo = '$grupo')"
            : "SELECT * FROM tcatalogo";

        $this->get_query();

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $key => $value) {
            array_push($data, $value);
        }

        return $data;
    }
    public function del($codAsignatura = '', $grupo = '')
    {
        $this->query = "UPDATE tcatalogo SET silabo=''
								WHERE codAsignatura='$codAsignatura' AND grupo = '$grupo'";
        $this->set_query();
    }
    public function __destruct()
    {
        $this;
    }
}
