📄 **README.md**
na raiz do seu repositório.

---

# ✅ **README.md — NexRise WordPress Theme Base**

```markdown
# NexRise – WordPress Theme Base + Docker Development Environment

Este repositório contém o ambiente oficial de desenvolvimento WordPress da **NexRise**, incluindo:

- Ambiente Docker completo (WordPress + MariaDB + phpMyAdmin)
- Tema WordPress personalizado (`nw-avada-like`)
- Scripts JS utilitários
- Estrutura limpa de desenvolvimento
- Configurações padronizadas para novos projetos da agência

Este repositório serve como **template base** para a criação de novos sites WordPress profissionais.

---

## 🚀 Tecnologias Utilizadas

- **WordPress**
- **PHP 8+**
- **Docker & Docker Compose**
- **MariaDB**
- **phpMyAdmin**
- **Node.js**
- **JavaScript ES6**
- **SASS/CSS**
- **Playwright (Testes automatizados)**

---

## 📦 Estrutura do Projeto

```

dev/
└── wp-content/
├── themes/
│    └── nw-avada-like/      → Tema WordPress desenvolvido pela NexRise
├── plugins/                 → (Ignorado pelo Git)
└── uploads/                 → (Ignorado pelo Git)
docker/
├── docker-compose.yml            → Configurações Docker
└── htaccess_dev                  → Configuração do ambiente local
.gitignore                         → Arquivos ignorados no versionamento
package.json                       → Scripts Node & dependências
*.js                               → Scripts utilitários

````

### 🔒 Arquivos sensíveis não vão para o GitHub

O `.gitignore` bloqueia:

- `wp-config.php`
- `uploads/`
- `plugins/`
- `backups/`
- `logs/`
- Arquivos de cache  
- Credenciais do WordPress ou banco de dados

Isso mantém o repositório **100% seguro**.

---

## 🐳 Como rodar o ambiente local (Docker)

Certifique-se de ter o Docker instalado.

### **1. Suba o ambiente**

```bash
docker-compose up -d
````

### **2. Acesse:**

* **Site WordPress:** [http://localhost:8000](http://localhost:8000)
* **phpMyAdmin:** [http://localhost:8080](http://localhost:8080)

  * User: `root`
  * Senha: definida no docker-compose (apenas ambiente local)

---

## 🧩 Tema WordPress

O tema principal está em:

```
dev/wp-content/themes/nw-avada-like
```

### Estrutura do tema:

* `assets/` – CSS, JS, imagens
* `inc/` – funções internas e customizações
* `languages/` – tradução
* `template-parts/` – seções do site
* Arquivos PHP (header, footer, front-page, index etc.)

O tema já está pronto para ser usado como base em novos projetos.

---

## 🛠 Scripts Node

Instalar as dependências:

```bash
npm install
```

Scripts úteis:

```bash
npm run build      # Build de assets
npm run watch      # Monitoramento em tempo real (se configurado)
```

---

## 🔥 Testes Automatizados (Playwright)

Os testes ficam em:

```
dev/ui-tests/
```

Para rodar (se configurado):

```bash
npx playwright test
```

---

## 🚀 Deploy para Produção

O deploy é feito **apenas do tema**, copiando-o para o servidor do cliente.

### 1. Gerar a versão final do tema

```bash
npm run build
```

### 2. No servidor (FTP, SFTP ou CI/CD)

Copiar:

```
dev/wp-content/themes/nw-avada-like
```

para:

```
/public_html/wp-content/themes/
```

---

## 🧾 Contribuição

1. Criar nova branch:

```bash
git checkout -b feature/nome-da-feature
```

2. Commitar:

```bash
git commit -m "feat: descrição da alteração"
```

3. Enviar:

```bash
git push origin feature/nome-da-feature
```

4. Abrir Pull Request → `main`

---

## 🏢 Sobre a NexRise

Agência especializada em:

* Criação de sites profissionais
* WordPress + WooCommerce
* Marketing digital
* Sistemas personalizados
* Consultoria e tecnologia

🌐 **[https://gonexrise.com](https://gonexrise.com)**

---

## 👤 Desenvolvedor Responsável

**Leandro Bueno da Silva**
NexRise – Founder & Creative Director
GitHub: [https://github.com/lbsilva16](https://github.com/lbsilva16)

---

## 📄 Licença

Projeto privado e exclusivo para uso interno da **NexRise**.

```

---

# 🎉 Pronto!

Quer que eu:

✅ Suba esse README para você (te passo os comandos)?  
Ou  
✅ Adapte esse README para virar um **template da agência**?  
Ou  
✅ Crie um README ainda mais detalhado?  

Só me dizer!
```
