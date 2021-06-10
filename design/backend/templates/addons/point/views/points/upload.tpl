

<table class="table table-sm p-2">
 
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Data</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
    {foreach $dados as $value}
  <tbody>
     <tr>
      <td>{$value.firstname}</td>
      <td>{$value.lastname}</td>
      <td>{$value.data}</td>
      <td>{$value.total_pontos}</td>
     </tr>
    </tbody>
    {/foreach}
</table>