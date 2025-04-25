# 🚀 Instalación rápida de Drupal CMS con DDEV

Este proyecto incluye un script para automatizar la instalación de **Drupal CMS** en un entorno local utilizando [DDEV](https://ddev.readthedocs.io/). Ideal para desarrolladores que necesitan levantar rápidamente un sitio Drupal para pruebas o desarrollo.

## ✅ Requisitos previos

- Tener [DDEV instalado](https://ddev.readthedocs.io/en/stable/users/install/)
- Usar WSL o un sistema basado en Unix (Linux/macOS)
- Tener acceso a internet para que Composer descargue los paquetes de Drupal

Puedes comprobar que DDEV está instalado ejecutando:

```bash
ddev --version
```

---

## 🛠️ Uso

```bash
chmod +x install-drupal.sh
./install-drupal.sh nombre-del-proyecto
```

Si no pasas ningún nombre, usará `drupalcms`.

---

## 🚦 Comandos útiles
```bash
ddev stop     # Detener el sitio
ddev start    # Iniciar de nuevo
ddev launch   # Abrir en navegador
ddev status   # Muestra información de la instalación
ddev delete --omit-snapshot   # Elimina la data de ddev para poder eliminar la carpeta
```

---

## 💻 Implementar como comando del sistema
Colocarlo en un directorio ya existente en `$PATH`
1. Mueve el script a `/usr/local/bin`, que suele estar en el `PATH` y es ideal para scripts personalizados:

```bash
sudo mv install-drupal.sh /usr/local/bin/install-drupal
```
2. Dale permisos de ejecución (por si acaso):

```bash
sudo chmod +x /usr/local/bin/install-drupal
```
3. Ahora puedes ejecutarlo en cualquier parte con:

```bash
install-drupal nombre-del-proyecto
```
Si no pasas un nombre, usará `drupalcms`.

---

## 📄 Licencia
MIT

---