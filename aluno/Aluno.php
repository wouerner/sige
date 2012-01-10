<?php

class Aluno{

	public nomeCompleto;
	public lagradouro;
	public bairro;
	public cidade;
	public estadoUF;
	public CEP;
	public dataNac;
	public naturalidade;
	public naturalidadeUF;
	public CPF;
	public RG;
	public rgOrgao;
	public expedicao;
	public nomeDoPai;
	public nomeDoMae;
	public email;
	public inicioCurso;
	public terminoCurso;
	public tipoCurso;
	public situacaoAluno;
	public instituicao;
	public polo;
	public descricao1;
	public telefones;
	public idAluno;
	public senha;
	public celular;
	public DDD;
	public urlFoto;
	public registroAtivo;
	public codigoAluno;
	public dataCadastro;


	/* get */
	public function getNomeCompleto(){ return $this->nomeCompleto ; }
	public function getDataNac(){ return $this->dataNasc ; }
	public function getNaturalidade(){ return $this->naturalidade ; }
	public function getNaturalidadeUF(){ return $this->naturalidadeUF ; }
	public function getCPF(){ return $this->CPF ; }
	public function getRG(){ return $this->RG ; }
	public function getRgOrgao(){ return $this->rgOrgao ; }
	public function getExpedicao(){ return $this->expedicao ; }
	public function getNomeDoPai(){ return $this->nomeDoPai ; }
	public function getNomeDoMae(){ return $this->nomeDomae ; }
	public function getLagradouro(){ return $this->lagradouro ; }
	public function getBairro(){ return $this->bairro ; }
	public function getCidade(){ return $this->cidade ; }
	public function getEstadoUF(){ return $this->estadoUF ; }
	public function getCEP(){ return $this->CEP;}
	public function getEmail(){return $this->email ; }
	public function getInicioCurso(){ return $this->inicioCurso; }
	public function getTerminoCurso(){ return $this->terminoCurso ; }
	public function getTipoCurso(){ return $this->tipoCurso ; }
	public function getSituacaoAluno(){ return $this->situacaoAluno ; }
	public function getInstituicao(){ return $this->instituicao ; }
	public function getPolo(){ return $this->polo ; }
	public function getDescricao1(){ return $this->descricao1 ; }
	public function getTelefones(){ return $this->telefones ; }
	public function getSenha(){ return $this->senha ; }
	public function getCelular(){return $this->celular ; }
	public function getDDD(){ return $this->DDD ; }
	public function getUrlFoto(){ return $this->urlFoto ; }
	public function getRegistroAtivo(){ return $this->registroAtivo ; }
	public function getCodigoAluno(){ return $this-> codigoAluno ; }
	public function getDataCadastro(){ return $this-> dataCadastro ; }

	/* set */
	public function setNomeCompleto($nomeCompleto){ $this->nomeCompleto = $nomeCompleto ; }
	public function setDataNac($dataNasc){ $this->$dataNasc= $dataNasc ; }
	public function setNaturalidade($naturalidade){ $this->naturalidade = $naturalidade ; }
	public function setNaturalidadeUF($naturalidadeUF){ $this->naturalidadeUF = $naturalidadeUF ; }
	public function setCPF($CPF){  $this->CPF = $CPF ;}
	public function setRG($RG){ $this->$RG = $RG ; }
	public function setRgOrgao($rgOrgao){ $this->rgOrgao = $rgOrgao ; }
	public function setExpedicao($expedicao){ $this->expedicao = $expedicao ; }
	public function setNomeDoPai($nomeDoPai){ $this->nomeDoPai = $nomeDoPai ;  }
	public function setNomeDoMae($nomeDoMae){ $this->nomeDoMae = $nomeDoMae ; }
	public function setLagradouro($lagradouro){ $this->lagradouro = $lagradouro ; }
	public function setBairro($bairro){$this->bairro = $bairro ; }
	public function setCidade($cidade){$this->cidade = $cidade ; }
	public function setEstadoUF($estadoUF){$this->estadoUF = $estadoUF ;}
	public function setCEP($CEP){$this->CEP = $CEP ; }
	public function setEmail($email){$this->}
	public function setInicioCurso($inicioCurso){$this->}
	public function setTerminoCurso($terminoCurso){$this->terminoCurso = $terminoCurso;}
	public function setTipoCurso($tipoCurso){$this->tipoCurso = $tipoCurso ; }
	public function setSituacaoAluno($situacaoAluno){$this->situacaoAluno = $situacaoAluno ; }
	public function setInstituicao($instituicao){$this->instituicao = $instituicao ; }
	public function setPolo($polo){$this->polo = $polo ; }
	public function setDescricao1($descricao1){$this->descricao1 = $descricao1 ; }
	public function setTelefones($telefones){$this-> telefones ; }
	public function setSenha($senha){$this->senha = $senha ;}
	public function setCelular($celular){$this->celular = $celular ; }
	public function setDDD($DDD){$this->DDD =$DDD ; }
	public function setUrlFoto($urlFoto){$this->urlFoto = $urlFoto ; }
	public function setRegistroAtivo($registroAtivo){$this->registroAtivo = $registroAtivo ; }
	public function setCodigoAluno($codigoAluno){$this->codigoAluno = $codigoAluno ;}
	public function setDataCadastro($dataCadastro){$this->dataCadastro = $dataCadastro ; }
}

?>
