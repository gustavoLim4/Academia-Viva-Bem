<footer class="rodape wow  animate__animated animate__fadeInUp">
    <section>

        <div class="site">
            <!-------Info da Academia-------->
            <div class="infoAcademia">
                <img src="imagem/icones/logoVivaBem.svg" alt="Logo da academia">
                <ul>
                    <li>
                        <a href="#">
                            <img src="imagem/icones/iconeFacebook.svg" alt="Rede social da academia">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="imagem/icones/iconeInstagram.svg" alt="Rede social da academia">
                        </a>
                    </li>
                    <li>
                        <a href="#"><img src="imagem/icones/iconeWhatsVerde.svg" alt="Rede social da academia">
                        </a>
                    </li>
                </ul>
                <a href="mailto:vivabem@ti21.smpsistema.com.br">vivabem@ti21.smpsistema.com.br</a>
                <a href="tel:+5511999999999">(11) 999 999 999</a>
                <table>
                    <tr>
                        <td rowspan="2">Horário de Funcionamento</td>
                        <td>Seg-Sex 11h às 16h</td>
                    </tr>

                    <tr>
                        <td>Sáb e Fer 11h às 12h</td>
                    </tr>
                </table>

            </div>

            <!------Políticas e Privacidade------->
            <div class="politicas">

                <h2>Políticas e Privacidade</h2>
                <p>Colotemos informações pessoais de forma voluntária para responder a consultas e fornecer
                    informações sobre nossos serviços.
                    Utilizamos cookies para melhorar a experiência do usuário.
                    Suas informações são protegidas por medidas de segurança,mas a transmissão online não é
                    totalmente segura.
                    Não compartilhamos seus dados sem consentimento, exceto em obrigações legais. Links paara
                    terceiros não estão sob nossa responsabilidade.
                    Podemos atualizar essa política periodicamente.
                </p>
                <h3>AV. Marechal Tito, 1500</h3>
                <h3>São Paulo - SP</h3>
                <h3>08010-090</h3>
            </div>
        </div>
    </section>
    <section>
        <h2>Direitos reservados ao TI21 - Senac SMP</h2>
    </section>
    <section>
        <h2>Desenvolvido por Alessandro e Ricardo</h2>
    </section>
</footer>

<div id="loginModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()" id="cloose">&times;</span>
        <h2>Login</h2>
        <form id="loginForm">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="buttologar">
                <button type="button" onclick="carregarLogin()">Login</button>
            </div>
        </form>
        <div id="msgLogin"></div>
    </div>
</div>