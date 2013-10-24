<table>
	<thead>
	<tr>
		<th>Color</th>
		<th>Votes</th>
	</tr>
	</thead>
	<tbody>
<?php foreach ($colors as $color): ?>
		<tr>
			<td>
			<?php echo $this->Html->link($color['Color']['name'], '#', 
						array(	'class'=>'colorlink', 
							'data-color-id'=>$color['Color']['id'])); ?>
			</td>
		<td class="votetd">&nbsp;</td>
		</tr>
<?php endforeach; ?>
	</tbody>
	<tfoot>
		<tr>
			<td>Total</td>
			<td id="total"></td>
		</tr>
	<tfoot>
</table>
<button id="calcTotal">Calculate Total</button>


<?php 
$callback = <<<EOT
var e = $(this);
var color_id = e.data('color-id');
var url = '{$this->Html->url(array('controller'=>'colors', 'action'=>'getvotecount'))}';
$.ajax({
	url: url + "/" + color_id,
	dataType: 'json',
	type: 'POST',
	contentType: "application/json",
	success: function(data){
		var totalVotes = data.votes.Vote.totalVotes;
		e.closest('tr').children('td.votetd').html(parseInt(totalVotes).toLocaleString()).attr('data-votes', totalVotes);
	}
});
EOT;
$this->Js->get('.colorlink')->event('click', $callback);


$callback = <<<EOT
var total = 0;
$('.votetd').each(function(){
	var amount = parseFloat($(this).data('votes'));
	if(!isNaN(amount)){
		total += amount;		
	}
	$('#total').html(total.toLocaleString());
	
});
console.log(total);
EOT;
$this->Js->get('#calcTotal')->event('click', $callback);

?>
