#!/bin/bash

# === Verificar que ddev esté instalado ===
if ! command -v ddev &> /dev/null; then
  echo "❌ DDEV no está instalado. Por favor instálalo desde https://ddev.readthedocs.io/en/stable/"
  exit 1
fi

# === Nombre del proyecto por parámetro o por defecto ===
PROJECT_NAME="${1:-drupalcms}"

# === Evitar sobrescribir si ya existe ===
if [ -d "$PROJECT_NAME" ]; then
  echo "⚠️ La carpeta '$PROJECT_NAME' ya existe. Por favor elige otro nombre o elimínala primero."
  exit 1
fi

# === Crear carpeta y moverse a ella ===
mkdir "$PROJECT_NAME"
cd "$PROJECT_NAME" || exit 1

# === Configurar DDEV para Drupal 11 ===
ddev config --project-type=drupal11 --docroot=web

# === Iniciar DDEV ===
ddev start

# === Usar composer para crear el proyecto Drupal CMS ===
ddev composer create drupal/cms

# === Mostrar la información del proyecto creado ===
ddev status
