<?php include("includes/header.php"); ?>

<h1>Veículos</h1>

<label>Tipo combustivel</label>
<select>
    <option value="">Selecione o Tipo</option>
    <option value="1" Diesel></option>
    <option value="2" Flex></option>
    <option value="3" Etanol></option>
    <option value="4" Gasolina></option>
</select>

<label>Placa</label>
<input type="text" placeholder="Escreva a sua placa" />

<label>Ano</label>
<input type="text" placeholder="Escreva o ano" />

<label>Cor</label>
<input type="text" placeholder="Escreva a cor" />

<select>
    <option value="">Selecione o Status</option>
    <option value="1" Disponivel></option>
    <option value="2" Em Rota></option>
    <option value="3" Manutenção></option>
</select>

<label>Km Inicial</label>
<input type="text" placeholder="Escreva o km" />

<label>Data Última Manutenção</label>
<input type="datetime-local" placeholder="Escreva a data" />

<label>Intervalo de Manutenção</label>
<input type="text" placeholder="Escreva em dias" />

<?php include("includes/footer.php"); ?>