<php>
  $json = file_get_contents("data.json");
  $data = json_decode($json, true);
  echo $data["name"];
  echo $data["skills"];
  echo $data["interests"];
</php>
