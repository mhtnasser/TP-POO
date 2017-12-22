# TP-POO
<h1>Getting Started</h1>
<h2>1. Installations</h2>
<ul>
<li>Installer Docker for windows</li>
<li>Installer Virtualbox</li>
</ul>
<hr></hr>
<h4><a href="#windows" aria-hidden="true" class="anchor" id="user-content-windows"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Windows</h4>
<ul>
<li>Installer <a href="https://git-for-windows.github.io/" rel="nofollow">GitBash</a> (pour Windows) ou un autre outil de versionning.</li>
<li>Ouvrir GitBash (pour Windows)</li>
</ul>
<hr></hr>
<ul>
<li>Se rendre dans le dossier de son choix (où le projet sera installé)</li>
<li>Cloner le projet dans le dossier choisi :</li>
</ul>
<pre><code>
git clone https://github.com/mhtnasser/TP-POO.git
</code></pre>
<h3><a href="#3-monter-la-machine-virtuelle" aria-hidden="true" class="anchor" id="user-content-3-monter-la-machine-virtuelle"><svg aria-hidden="true" class="octicon octicon-link" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3. Monter l'environnement de travail</h3>
<ul>
<li>Lancer la console (invité de commande sur Windows ou gitbash)</li>
<li>Se rendre à la racine du projet</li>
<li>Lancer Docker</li>
</ul>
<pre><code>
 docker -v
 result : Docker version 17.09.0-ce, build afdb6d4
</code></pre>
<ul> <li>si cette commande functionne c'est que vous pouvez suivre la suite, si non vous devez installé docker et l'ajouter a votre path</li></ul>
<pre><code>
 docker-compose up -d
</code></pre>
<pre><code>
 docker-compose run --rm web composer install
</code></pre>
<ul>
<li>Attendre la fin du script puis se rendre sur <a href="http://127.0.0.1:8000/" rel="nofollow">http://127.0.0.1:8000/</a></li>
</ul>
