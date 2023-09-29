<?php


class PlayersDAO
{
    function findPlayers($pdo)
    {
        try
        {
            $allPlayers = $pdo->prepare("SELECT * FROM Players");
        }
        catch (PDOException $error)
        {
            echo "Prepare Failed : " . $error->getMessage();
        }
        try
        {
            $allPlayers->execute();

            $result = $allPlayers->fetchAll();
            print_r($result);
        }
        catch (PDOException $error)
        {
            echo "Request Failed : " . $error->getMessage();

        }
    }

    function findPlayersById($pdo, $id)
    {
        try
        {
            $onePlayer = $pdo->prepare("SELECT * FROM Players WHERE id=$id");
        }
        catch (PDOException $error)
        {
            echo "Prepare Failed : " . $error->getMessage();
        }
        try
        {
            $onePlayer->execute();

            $result = $onePlayer->fetchAll();
            print_r($result);
        }
        catch (PDOException $error)
        {
            echo "Request Failed : " . $error->getMessage();

        }
    }

    function findPlayersByPseudo($pdo, $pseudo)
    {
        try
        {
            $onePlayer = $pdo->prepare("SELECT * FROM Players WHERE login=$pseudo");
        }
        catch (PDOException $error)
        {
            echo "Prepare Failed : " . $error->getMessage();
        }
        try
        {
            $onePlayer->execute();

            $result = $onePlayer->fetchAll();
            print_r($result);
        }
        catch (PDOException $error)
        {
            echo "Request Failed : " . $error->getMessage();

        }
    }

    function findPlayersByEmail($pdo, $email)
    {
        try
        {
            $onePlayer = $pdo->prepare("SELECT * FROM Players WHERE email=$email");
        }
        catch (PDOException $error)
        {
            echo "Prepare Failed : " . $error->getMessage();
        }
        try
        {
            $onePlayer->execute();

            $result = $onePlayer->fetchAll();
            print_r($result);
        }
        catch (PDOException $error)
        {
            echo "Request Failed : " . $error->getMessage();

        }
    }

    function findPlayersByBirthDate($pdo, $birthDate)
    {
        try
        {
            $onePlayer = $pdo->prepare("SELECT * FROM Players WHERE login=$birthDate");
        }
        catch (PDOException $error)
        {
            echo "Prepare Failed : " . $error->getMessage();
        }
        try
        {
            $onePlayer->execute();

            $result = $onePlayer->fetchAll();
            print_r($result);
        }
        catch (PDOException $error)
        {
            echo "Request Failed : " . $error->getMessage();

        }
    }


    function createPlayer($pdo, $pseudo, $password, $email, $birthDate)
    {
        try
        {
            $newPlayer = $pdo->prepare("INSERT INTO Players (login, password, email, birthDate) VALUES ('".$pseudo."', '".$password."', '".$email."', '".$birthDate."')");
        }
        catch (PDOException $error)
        {
            echo "Prepare Failed : " . $error->getMessage();
        }
        try
        {
            $newPlayer->execute();

            $result = $newPlayer->fetchAll();
            print_r($result);
        }
        catch (PDOException $error)
        {
            echo "Request Failed : " . $error->getMessage();

        }
    }

}