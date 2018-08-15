<tr>
  <td>
    <img width="54" height="59" src="images/icons/<?= class_exists($this->type) ? mb_strtolower(substr($this->type, 4)) : 'default'?>.png" alt="<?= mb_strtolower(substr($this->type, 4))?>">
  </td>
  <td>
    <?= $this->name?>
  </td>
  <td>
    <?= $this->author?>
  </td>
  <td>
    <a
      href="<?= ltrim($this->file_path, '/') . 'books/' . $this->name . '.' . mb_strtolower(substr($this->type, 4))?>"
      title="download <?= $this->name?>">
      Click me for download
    </a>
  </td>
  <td>
    Harry Potter is a series of fantasy novels written by British author J. K. Rowling...
  </td>
<tr>