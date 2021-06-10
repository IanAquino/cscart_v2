
<table class="table table-hover p-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Points</th>
    </tr>
  </thead>
  <tbody>
  {foreach $dados as $value}
    <tr>
     
        <td>
            <a href="admin.php?dispatch=points.upload&user_id={$value.user_id}"> 
                {$value.firstname} {$value.lastname} 
            </a>
        </td>
        <td>
            {$value.sum_total_pontos}
        </td>
    </tr>
    {/foreach}
  </tbody>
</table>