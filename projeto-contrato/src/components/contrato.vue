<template>
    <div  class="container">
        <div ref="contrato" id="contrato">
            <h4 class="text-center mt-4">CONTRATO DE LOCAÇÃO DA POUSADA DO MEL</h4>
            <br>
            <div>
                <h5>CLÁUSULA PRIMEIRA – DAS PARTES CONTRATANTES</h5>
                <p>Pelo presente instrumento particular de contrato de locação para uso temporário, de um lado, como <strong>LOCADOR</strong>:</p>
                <p><strong>Sr. Marcos Ferreira</strong>, brasileiro, portador do RG nº 13.513.128-5 SSP/SP e do CPF nº 050.471.908-46, residente e domiciliado na Rodovia Olímpio Ferreira da Silva, km 04, SP-272, doravante denominado simplesmente <strong>LOCADOR</strong>.</p>
                <br>
                <p>E, de outro lado, como <strong>LOCATÁRIO</strong>:</p>
                <br>
                <p><strong>Nome completo:</strong> {{ dados.nome }}</p>
                
                <p><strong>RG n°:</strong> {{ dados.rg }}</p>
                
                <p><strong>CPF n°:</strong> {{ dados.cpf }}</p>
                
                <p><strong>Endereço:</strong> {{ dados.endereco }}</p>
                
                <p><strong>Cidade/Estado</strong> {{ dados.cidade }}</p>
                
                <p><strong>Celular/WhatsApp:</strong> {{ dados.telefone }}</p>
                
                <br>
                <p>As partes acima identificadas firmam o presente contrato de locação de imóvel para uso temporário, de acordo com as cláusulas e condições seguintes:</p>
                <br>

                <h5>CLÁUSULA SEGUNDA – DO OBJETO</h5>

                <p>O presente contrato tem como objeto a locação, por tempo determinado, da chácara localizada na Rodovia Olímpio Ferreira da Silva, km 04, SP-272, destinada à realização do evento descrito abaixo:</p>

                <p><strong>Tipo de Evento:</strong> {{ dados.tipoEvento }}</p>

                <p><strong>Data do Evento:</strong> {{ dayjs(dados.data).format('DD/MM/YYYY') }}</p>

                <p><strong>Número previsto de pessoas:</strong> {{ dados.qtdePessoas }}</p>

                <br>

                <h5>CLÁUSULA TERCEIRA – DAS CONDIÇÕES DA LOCAÇÃO</h5>
                <p>
                    Tem entre si justo e contratado, que mutuamente aceitam e outorgam, o seguinte:
                </p>
                <p>
                    O <strong>LOCADOR</strong>, proprietário da <strong>Pousada do Mel</strong>, situada na Rodovia Olímpio Ferreira da Silva, km 04, SP-272, aluga ao <strong>LOCATÁRIO</strong> o referido imóvel, conforme as cláusulas e condições abaixo estipuladas:
                </p>

                <ol class="list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">	
                            A presente locação destina-se ao uso temporário do imóvel no período compreendido entre o dia {{ dadosContrato.dl_data_entrada }} (entrada às {{ dadosContrato.dl_hora_entrada }} horas) e o dia {{ dadosContrato.dl_data_saida }} (saída até às {{ dadosContrato.dl_hora_saida }} horas), <strong>obrigando-se o LOCATÁRIO a restituir o imóvel totalmente desocupado, livre e desimpedido, nas mesmas condições em que o recebeu.</strong>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">	
                            O valor total acordado para o período de locação é de <strong>R$ {{ dadosContrato.dl_valor }},00</strong>, a ser pago conforme as condições estipuladas neste contrato.
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">	
                            Fica estipulada uma <strong>taxa adicional de limpeza</strong> no valor de <strong>R$ 150,00 (cento e cinquenta reais)</strong>, a ser cobrada caso o imóvel não seja devolvido em condições mínimas de limpeza, incluindo:

                            <ul>
                                <li>Recolhimento de todo o lixo</li>
                                <li>Chão varrido</li>
                                <li>Louça devidamente lavada</li>
                            </ul>
                        </div>
                    </li>
                </ol>

                <br>
                <h5>CLÁUSULA QUARTA – DAS CONDIÇÕES DE PAGAMENTO</h5>
                <p>O pagamento referente à locação será realizado da seguinte forma:</p>
                <br>
                <p>
                    a) A título de <strong>reserva</strong>, o LOCATÁRIO compromete-se a pagar <strong>50% (cinquenta por cento)</strong> do valor total da locação, ou parte dele, no valor de <strong>R$ {{ dadosContrato.dl_valor_comprometido }},00</strong>, por meio de:
                </p>
                <ul>
                    <li>Pagamento em dinheiro</li>
                    <li>Transferência via <strong>PIX</strong> em nome de <strong>Tânia Regina S. L. Ferreira</strong>, Banco Sicredi</li>
                    <li>Ou depósito no <strong>Banco do Brasil</strong>, Agência <strong>2455-4</strong>, Conta Corrente em nome de <strong>Marcos Ferreira</strong>. Com o <strong>comprovante enviado para o número (18) 98120-8192</strong>.</li>
                </ul>

                <p>
                    b) O <strong>saldo restante de 50% (cinquenta por cento)</strong>, acrescido da <strong>taxa única de limpeza</strong>, se devida, será pago na <strong>data de entrada no imóvel</strong> (conforme estipulado na Cláusula Terceira), no ato da entrega das chaves, podendo ser realizado
                </p>

                <ul>
                    <li>Em dinheiro</li>
                    <li>Por cartão, com acréscimo de <strong>3% (três por cento)</strong> para pagamentos no <strong>débito</strong>, ou <strong>5% (cinco por cento)</strong> para pagamentos no <strong>crédito</strong></li>
                </ul>

                <p>
                    c) Em caso de <strong>atraso no pagamento</strong> dos valores estipulados neste contrato, incidirá sobre o montante devido:
                </p>

                <ul>
                    <li>
                        Multa moratória de 2% (dois por cento);
                    </li>
                    <li>
                        Juros de mora de 1% (um por cento) ao mês;
                    </li>
                    <li>
                        Correção monetária pelo índice IPCA, até a data do efetivo pagamento.
                    </li>
                </ul>

                <br>
                <h5>CLÁUSULA QUINTA – DO CANCELAMENTO, DESISTÊNCIA E DIREITO DE ARREPENDIMENTO</h5>
                
                <ol class="list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <p class="ms-2 me-auto">	
                            Em caso de desistência da locação por parte do <strong>LOCATÁRIO</strong>, após a efetivação da reserva e transcorrido o prazo legal de 7 (sete) dias corridos para exercício do direito de arrependimento (conforme artigo 49 do Código de Defesa do Consumidor – Lei nº 8.078/90), <strong>será retido pelo LOCADOR</strong> o valor correspondente a <strong>30% (trinta por cento)</strong> do valor total contratado, a título de compensação pelas despesas administrativas, bloqueio da data e perdas decorrentes da indisponibilidade do imóvel para outros interessados.
                        </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <p class="ms-2 me-auto">	
                            Caso a desistência ocorra <strong>com menos de 7 (sete) dias de antecedência da data de entrada</strong>, o LOCADOR poderá reter até 50% (cinquenta por cento) do valor total contratado, salvo se houver realocação da data a um novo cliente.
                        </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <p class="ms-2 me-auto">
                            Nos casos em que a reserva for cancelada dentro do prazo legal de arrependimento e tenha sido realizada fora do estabelecimento (via internet, telefone ou outro meio remoto), o LOCATÁRIO fará jus à devolução integral dos valores pagos, desde que solicitado expressamente dentro do prazo de 7 (sete) dias corridos contados da contratação.
                        </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <p class="ms-2 me-auto">
                            Para os fins desta cláusula, a <strong>retenção contratual não será considerada abusiva</strong>, nos termos do artigo 51, inciso IV, do CDC, uma vez que se trata de valor proporcional ao prejuízo suportado pelo LOCADOR e à limitação do uso do bem por outros interessados.
                        </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <p class="ms-2 me-auto">
                            Na hipótese de <strong>caso fortuito ou força maior</strong> (como enchentes, quedas de energia prolongadas, catástrofes naturais, entre outros) que impeça a utilização do imóvel locado, o presente contrato poderá ser <strong>rescindido sem ônus para qualquer das partes</strong>, com restituição proporcional dos valores pagos, observando-se a boa-fé e os princípios da equidade contratual.
                        </p>
                    </li>
                </ol>

                <br>
                <h5>CLÁUSULA SEXTA – DAS RESPONSABILIDADES DO LOCATÁRIO</h5>
                <ol class="list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <p class="ms-2 me-auto">
                            O <strong>LOCATÁRIO</strong> compromete-se a zelar pela conservação do imóvel e será integralmente <strong>responsável por quaisquer danos causados</strong> ao imóvel, seus utensílios, móveis, eletrodomésticos ou estrutura física, inclusive em caso de <strong>incêndios provocados por cigarros ou qualquer outro agente</strong>, tendo em vista que a construção é <strong>inteiramente de madeira</strong>.
                        </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <p class="ms-2 me-auto">
                            O LOCATÁRIO obriga-se, ainda, a <strong>cumprir todas as exigências legais ou administrativas dos Poderes Públicos</strong>, desde que decorram de seu uso do imóvel, bem como a <strong>não transferir este contrato, nem realizar alterações, reformas ou modificações</strong> no imóvel, salvo mediante autorização expressa e por escrito do LOCADOR.
                        </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <p class="ms-2 me-auto">
                            O LOCATÁRIO <strong>autoriza, desde já, o LOCADOR a vistoriar ou examinar o imóvel</strong> locado sempre que este julgar necessário, mediante aviso prévio razoável.
                        </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <p class="ms-2 me-auto">
                            É <strong>vedada a sublocação, cessão ou empréstimo</strong> do imóvel, total ou parcial, a terceiros sem autorização expressa do LOCADOR. Caso esta autorização venha a ser concedida, o LOCATÁRIO obriga-se a <strong>comunicar os ocupantes</strong> quanto às regras contratuais, e a <strong>garantir a entrega do imóvel nas mesmas condições em que o recebeu</strong>, respeitando a data e horário estipulados para devolução.
                        </p>
                    </li>
                </ol>

                <br>
                <h5>CLÁUSULA SÉTIMA – ISENÇÃO DE RESPONSABILIDADE DO LOCADOR</h5>
                <ol class="list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <p class="ms-2 me-auto">
                            O LOCADOR <strong>não se responsabiliza por quaisquer danos, furtos ou roubos</strong> que venham a ocorrer no interior do imóvel durante o período de locação.
                        </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <p class="ms-2 me-auto">
                            A pousada conta com duas piscinas de fibra: uma grande (10 x 5 x 1,40 m) e uma infantil. Ambas possuem <strong>grades de proteção</strong> ao redor. Portanto, qualquer acidente ocorrido nas dependências da área da piscina, como <strong>afogamento, quedas, uso de bebidas alcoólicas, ou outros eventos</strong>, será de <strong>inteira responsabilidade do LOCATÁRIO</strong>, eximindo o LOCADOR de qualquer responsabilidade. <strong>Pais e responsáveis devem cuidar de suas crianças e uns dos outros</strong>.
                        </p>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">	
                            A propriedade conta com <strong>medidas de segurança</strong>, tais como:
                            <ul>
                                <li>Alambrados nas passarelas (que ligam a pousada ao pesqueiro);</li>
                                <li>Grades nas janelas;</li>
                                <li>Grades de proteção ao redor das piscinas;</li>
                                <li>Extintores de incêndio;</li>
                                <li>Alambrado em torno da represa.</li>
                            </ul>
                        </div>
                    </li>
                </ol>

                <p>
                    Mesmo com essas medidas, o <strong>PESQUEIRO FERREIRA MEL</strong> e o proprietário <strong>Marcos Ferreira não se responsabilizam por acidentes, furtos ou roubos</strong> que eventualmente possam ocorrer na propriedade.
                </p>

                <br>
                <h5>CLÁUSULA OITAVA – DAS DEPENDÊNCIAS E ESTRUTURA DO IMÓVEL</h5>
                <ol class="list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            A <strong>parte superior da pousada</strong> conta com:
                            <ul>
                                <li>Passarela;</li>
                                <li>Área com 2 poltronas de madeira;</li>
                                <li>Hall de entrada com bancos de madeira;</li>
                                <li>Pia com armário;</li>
                                <li>2 rádios antigos;</li>
                                <li>2 quartos com ar-condicionado, 2 camas de casal, 3 treliches com colchões (total de 11 camas);</li>
                                <li>1 frigobar, 1 televisão LCD;</li>
                                <li>Banheiro com chuveiro quente, armário com espelho, pia, vaso sanitário, porta de vidro com fechadura, papeleira, saboneteira, 2 suportes para toalhas e vitrô em vidro temperado (blindex).</li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            A <strong>área externa</strong> dispõe de:
                            <ul>
                                <li>2 churrasqueiras com 12 espetos;</li>
                                <li>3 grelhas de carne, 3 pias;</li>
                                <li>2 fogões industriais, 1 fogão a lenha;</li>
                                <li>Utensílios de cozinha diversos (pratos, talheres, panelas, conchas, abridores, escumadeiras, colheres de arroz);</li>
                                <li>3 jogos de lixeiras, 2 tábuas grandes de carne;</li>
                                <li>Vassoura, rodos, 1 freezer, 1 geladeira, 1 TV LCD;</li>
                                <li>2 banheiros com 3 vasos sanitários, 2 chuveiros com água quente, 2 pias, 1 papeleira, 3 lixeiras;</li>
                                <li>4 mesas de madeira, 6 bancos de madeira, 2 cadeiras de madeira, 1 jogo de sofá;</li>
                                <li>1 quadro decorativo (girassol), 2 mangueiras grandes da piscina;</li>
                                <li>2 espreguiçadeiras, 2 cadeiras de área, 2 redes;</li>
                            </ul>
                        </div>
                    </li>
                </ol>

                <br>
                <h5>CLÁUSULA NONA – DO ACESSO AO IMÓVEL</h5>
                <p>
                    Os portões de acesso ao <strong>pesqueiro</strong> e à <strong>pousada</strong> que dá acesso ao pesqueiro serão <strong>fechados às 19h00</strong>. O <strong>portão de acesso exclusivo à pousada</strong>, localizado dentro da propriedade e acessado por estrada de terra, <strong>permanecerá aberto</strong>, caso haja necessidade de deslocamento, entrada ou saída durante o período de locação.
                </p>

                <br>
                <h5>CLÁUSULA DÉCIMA – DAS PROIBIÇÕES</h5>
                <p>
                    <strong>É terminantemente proibida a realização de festas do tipo “leve e bebe”</strong> nas dependências da pousada. O descumprimento desta cláusula poderá acarretar a imediata rescisão do contrato, sem direito à restituição de valores pagos.
                </p>

                <br>
                <h5>CLÁUSULA DÉCIMA PRIMEIRA– DO SILÊNCIO E RESPEITO À LEI</h5>
                <p>
                    Fica vedada qualquer conduta que resulte em <strong>perturbação do sossego público</strong>, tais como gritaria, algazarra, uso excessivo de instrumentos musicais, sinais acústicos ou qualquer outra forma de barulho abusivo.
                </p>

                <p>
                    Conforme dispõe o <strong>Artigo 42 do Decreto-Lei nº 3.688/41 (Lei das Contravenções Penais)</strong>:
                </p>

                <p>
                    "Perturbar alguém o trabalho ou o sossego alheio: com gritaria ou algazarra; com o exercício de profissão incômoda ou ruidosa, em desacordo com as prescrições legais; com abuso de instrumentos sonoros ou sinais acústicos; com barulho produzido por animal de que tem a guarda."
                </p>

                <p>
                    Tal conduta constitui <strong>crime</strong>, punível com <strong>prisão simples, multa</strong> e <strong>possível apreensão de equipamento ou veículo</strong>.
                </p>

                <p>
                    O uso de músicas com letras obscenas, que façam apologia ao crime, ao sexo ou que contenham teor ofensivo, só é permitido <strong>em volume baixo</strong>, de modo que <strong>somente os ocupantes do imóvel possam ouvi-las</strong>.
                </p>

                <hr>

                <h5>CLÁUSULA DÉCIMA SEGUNDA – USO DE IMAGEM E AUTORIZAÇÃO DE DIVULGAÇÃO</h5>

                <ol class="list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            O LOCATÁRIO, ao assinar o presente contrato, <strong>autoriza o LOCADOR</strong>, de forma <strong>irrevogável e irretratável</strong>, a:

                            <ul>
                                <li>
                                    a) <strong>Utilizar e veicular fotografias</strong> tiradas durante sua estadia, contendo a sua imagem, em <strong>folders, catálogos, materiais institucionais e promocionais</strong> da marca <strong>Ferreira Mel</strong>, sem limitação de número de inserções, reproduções ou tempo de uso;
                                </li>
                                <li>
                                    b) Utilizar tais imagens também nos meios digitais, como o <strong>site oficial, redes Intranet e Extranet</strong>, bem como em <strong>redes sociais como Instagram, Facebook, e outras plataformas de divulgação</strong>;
                                </li>
                                <li>
                                    c) O LOCATÁRIO declara ciência e concordância de que esta autorização é firmada <strong>em caráter definitivo</strong>, obrigando-se, juntamente com seus <strong>herdeiros e sucessores</strong>, aos termos ora pactuados, sem que caiba qualquer tipo de indenização, compensação ou contraprestação futura por parte do LOCADOR.
                                </li>
                                <li>
                                    d) A autorização concedida pelo LOCATÁRIO para uso de sua imagem poderá ser revogada a qualquer momento, mediante manifestação formal por escrito, sem que isso gere qualquer ônus ou indenização, ressalvadas as divulgações já realizadas antes da revogação.
                                </li>
                            </ul>
                        </div>
                    </li>
                </ol>
                <br>

                <h5>CLÁUSULA DÉCIMA TERCEIRA – Cláusula de Proteção de Dados Pessoais (LGPD)</h5>

                <p>
                    Nos termos da Lei nº 13.709/2018 (Lei Geral de Proteção de Dados Pessoais – LGPD), as partes declaram que os dados pessoais coletados neste contrato serão utilizados exclusivamente para fins contratuais e legais, não sendo compartilhados com terceiros, salvo por obrigação legal ou consentimento do titular. O LOCADOR compromete-se a adotar medidas técnicas e administrativas para proteção desses dados.
                </p>
    
                <br>
                <p class="text-center text-decoration-underline">
                    <strong>Aqui sempre a Família está em Primeiro lugar, pois Deus Reina aqui</strong>.
                </p>

                <div>
                    E por assim terem contratado, assinam o presente contrato, em presença das testemunhas abaixo, para que produza seus efeitos legais. 
                    <div style="display: flex;">
                        Pirapozinho/SP, {{ dados.dia }} de {{ dados.mes }} de {{ dados.ano }}.
                    </div>
                </div>
                
                <br>

                <div class="assinaturas-container">
                    <div class="assinatura-left">
                        <img src="./../../public/assinaturas/Marcos.jpg" alt="Assinatura Locador" class="assinatura">
                        <hr class="linha">
                        <p>LOCADOR - MARCOS FERREIRA</p>
                    </div>

                    <div class="assinatura-right">
                        <img :src="assinatura" alt="Assinatura Locatário" class="assinatura">
                        <hr class="linha">
                        <p>LOCATÁRIO</p>
                    </div>
                </div>

                <div class="assinaturas-container">
                    <div class="assinatura-left">
                        <img src="./../../public/assinaturas/Laiza.jpg" alt="Assinatura Testemunha 1" class="assinatura">
                        <hr class="linha">
                        <p>TESTEMUNHA 1</p>
                    </div>

                    <div class="assinatura-right">
                        <img src="./../../public/assinaturas/Tania.jpg" alt="Assinatura Testemunha 2" class="assinatura">
                        <hr class="linha">
                        <p>TESTEMUNHA 2</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-3 mb-4">
            <input
                type="checkbox"
                id="aceite"
                v-model="termos"
                class="form-check-input"
            />
            <label for="aceite" class="form-check-label">
                Li e concordo com os termos do contrato.
            </label><p></p>
            <div v-if="erro" class="text-danger mt-2">
                Você precisa aceitar os termos para continuar.
            </div>
            <button type="button" class="btn btn-primary" @click="gerarPdf(), apagarToken()">Baixar PDF</button>
        </div>
    </div>
</template>

<script>
import html2pdf from 'html2pdf.js';
import dayjs from 'dayjs';
import axios from 'axios';

export default {
    props: ['dados', 'assinatura', 'dadosContrato', 'token'],
    data() {
        return {
            termos: false,
            erro: false
        }
    },
    methods: {
        dayjs,
        async gerarPdf() {
            if (!this.termos) {
                this.erro = true;
                return;
            }
            this.erro = false;

            const el = this.$refs.contrato;

            const opt = {
                margin: 15,
                filename: 'contrato.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2, useCORS: true },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
                pagebreak: { mode: ['avoid-all', 'css', 'legacy'] },
            };

            html2pdf().set(opt).from(el).save();
        },
        apagarToken() {
            axios.put(`http://localhost:8000/api/dadosContrato/${this.token}`).then(response => {
                console.log("Sucesso!");
            })
            .catch(error => {
                console.error('Erro ao buscar dados:', error);
            });
        }
    }
}

</script>

<style scoped>
    #contrato {
        font-family: 'Aptos', 'Segoe UI', 'Helvetica', 'Arial', sans-serif;
    }
    .assinatura {
        width: 16em;
        height: 6em;
        object-fit: contain;
    }

    .assinatura-left, .assinatura-right {
        text-align: center;
        width: 45%;
        margin-top: 20px;
    }

    .assinaturas-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-top: 50px;
    }

    .linha {
        width: 18em;
        border-bottom: 1px solid black;
        margin: 10px auto;
    }

    p {
        font-size: 14px;
        margin-top: 5px;
    }

</style>