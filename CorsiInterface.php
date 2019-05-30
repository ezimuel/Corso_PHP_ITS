<?php
/**
 * Interfaccia per la gestione dei corsi
 * @author Enrico Zimuel (enrico.zimuel@its-ictpiemonte.it)
 */
declare(strict_types=1);

interface CorsiInterface
{
    public function getMediaCorsi(): float;
    public function addCorso(string $corso): bool;
    public function getCorsi(): array;
    public function addVoto(string $corso, int $voto): bool;
}
