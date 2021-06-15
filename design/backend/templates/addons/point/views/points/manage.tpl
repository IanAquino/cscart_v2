
<table class="table table-hover p-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Total Points</th>
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
        <td>
            <button type="button" class="btn btn-primary" onclick="$('#frm{$value.user_id}points').toggle();">
                    Insert Points
            </button>

             <form id="frm{$value.user_id}points" method="POST" action="admin.php?dispatch=points.manage" class="hidden">
                    <input type="hidden" name="user_id" value="{$value.user_id}"/>
                   
                    <input type="number" name="total_pontos"/>
                    <input type="submit" value="OK"/> 
                </form>
        </td>
    </tr>
    {/foreach}
  </tbody>
</table>