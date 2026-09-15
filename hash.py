import hashlib
import argparse

def generate_hash(data: str, algorithm: str = 'sha256') -> str:
    """
    Génère un hash pour une chaîne donnée en utilisant hashlib.

    :param data: La chaîne de caractères à hasher.
    :param algorithm: Le nom de l'algorithme de hashage (par défaut 'sha256').
                    Options : 'md5', 'sha1', 'sha256', 'sha512', etc.
    :return: Le hash de la chaîne sous forme hexadécimale.
    """
    try:
        hash_object = hashlib.new(algorithm)
        hash_object.update(data.encode('utf-8'))
        return hash_object.hexdigest()
    except ValueError as e:
        return f"Erreur : Algorithme de hashage non supporté ({e})"

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description="Générateur de hash avec hashlib")
    parser.add_argument("data", type=str, help="Le texte à hasher")
    parser.add_argument(
        "-a", "--algorithm", type=str, default="sha256",
        help="L'algorithme de hashage à utiliser (par défaut : sha256)"
    )

    args = parser.parse_args()

    result = generate_hash(args.data, args.algorithm)
    print(result)