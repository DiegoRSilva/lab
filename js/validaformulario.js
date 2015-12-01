	function validar() {
		var nomepaciente = cadpaciente.nomepaciente.value;
		var datanascpaciente = cadpaciente.datanascpaciente.value;
		var sexo = cadpaciente.sexo.value;
		var cpfpaciente  = cadpaciente.cpfpaciente.value;
		var cartaosuspaciente = cadpaciente.cartaosuspaciente.value;
		var cor = cadpaciente.cor.value;
		var rua = cadpaciente.rua.value;
		var numero = cadpaciente.numero.value;
		var bairro = cadpaciente.bairro.value;
		var cep = cadpaciente.cep.value;
		var municipio = cadpaciente.municipio.value;
		var nomeresponsavel = cadpaciente.nomeresponsavel.value;
		
		if (nomepaciente == "") {
			alert('Preencha o campo: Nome do Paciente.');
			cadpaciente.nprontuario.focus();
			return false;
			}
		if (datanascpaciente == "") {
			alert('Preencha o campo: Data Nascimento.');
			cadpaciente.datanascpaciente.focus();
			return false;
		}
		if (sexo =="") {
			alert('Preencha o campo: Sexo.');
			cadpaciente.sexo.focus();
			return false;
		}
		if (cpfpaciente =="") {
			alert('Preencha o campo: CPF.');
			cadpaciente.cpfpaciente.focus();
			return false
		}
		if (cartaosuspaciente = "") {
			alert('Preencha o campo: CNS.');
			cadpaciente.cartaosuspaciente.focus();
			return false;
		}
		if (cor =="") {
			alert('Preencha o campo: Cor.');
			cadpaciente.cor.focus();
			return false;
		}
		if (rua == "") {
			alert('Preencha o campo: Rua.');
			cadpaciente.rua.focus();
			return false;
		}
		if (numero ='') {
			alert('Preencha o campo: Número.');
			cadpaciente.numero.focus();
			return false;
		}
		if (bairro ='') {
			alert('Preencha o campo: Bairro.');
			cadpaciente.bairro.focus();
			return false;
		}
		if (cep = '') {
			alert('Preencha o campo: Cep.')
			cadpaciente.cep.focus();
			return false;
		}
		if (municipio = '') {
			alert('Preencha o campo: Munícipio.');
			cadpaciente.municipio.focus();
			return false;
		}
		if (nomeresponsavel ='') {
			alert('Preencha o campo: Nome do Responsável.');
			cadpaciente.nomeresponsavel.focus();
			return false;
		}
}