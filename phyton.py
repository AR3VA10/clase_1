# Definimos una lista con datos fijos
datos = [
    ["Juan", 25, "Ingeniero"],
    ["María", 30, "Diseñadora"],
    ["Pedro", 28, "Programador"]
]

# Mostramos los datos de la lista
print("Nombre\t\tEdad\tProfesión")
for persona in datos:
    print(f"{persona[0]}\t\t{persona[1]}\t{persona[2]}")
