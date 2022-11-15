# Projeto de extensão - Horta

Uma breve descrição sobre o que esse projeto faz e para quem ele é...

## Rodando localmente

1. Clone o projeto

Instale as dependências

```bash
npm install
```

Inicie o Tailwindcss CLI para verificar as alterações nas classes

```bash
npx tailwindcss -i ./src/css/input.css -o ./dist/output.css --watch
```
## Alteração de conteúdo:

1. `./tips.json` - Contém todas as dicas do site.
2. `./data.json` - Contém todas as informações do site.

### `tips.json (Organização básica):`
```json
[
    {
        "title": "Como fazer uma horta em casa?",
        "description": "Descricao da dica",
        "image": "./assets/img/nome_imagem.extensao",
        "author": "Autor da dica",
        "date": "Data da dica",
        "readTime": "(Tempo de leitura da dica) min",
        "content": [
            {
                "type": "text",
                "text": "Texto da dica"
            },
            {
                "type": "subtitle",
                "text": "Subtitulo da dica"
            },
        ]
    },
]
```

### `data.json (Organização básica):`
```json
{
  "about_description": "Descrição rápida da empresa",

  "history": "História da empresa",
}

```

