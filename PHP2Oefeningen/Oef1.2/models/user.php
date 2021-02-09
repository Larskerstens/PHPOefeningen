<?php

class user
{
    private $id;
    private $usr_voornaam;
    private $usr_naam;
    private $usr_mail;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getVoornaam(): string
    {
        return $this->usr_voornaam;
    }

    public function setVoornaam($usr_voornaam): void
    {
        $this->usr_voornaam = strtoupper($usr_voornaam);
    }

    /**
     * @return mixed
     */
    public function getNaam()
    {
        return strtoupper($this->usr_naam);
    }

    /**
     * @param mixed $usr_naam
     */
    public function setNaam($usr_naam): void
    {
        $this->usr_naam = strtoupper($usr_naam);
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->usr_mail;
    }

    /**
     * @param mixed $usr_mail
     */
    public function setMail($usr_mail): void
    {
        $this->usr_mail = $usr_mail;
    }

    /**
     * @return mixed
     */

    public function toArray(): array
    {
        return [
            "id" => $this->getId(),
            "voornaam" => $this->getVoornaam(),
            "naam" => $this->getNaam(),
            "mail" => $this->getMail(),
        ];
    }

    public function toArray2(): array
    {
        $retarr = [];

        foreach ($this as $key => $value) {
            $retarr[$key] = $value;
        }
        return $retarr;
    }

}