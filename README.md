# Test Recrutement Fulll

# Back-end + Algo FizzBuzz

## Info Candidat :

Ababssi Sophien  
abasop1@gmail.com  
0634124062

## Objectif :

Concevoir une application en PHP permettant de gérer des flottes,  
des véhicules et leurs localisations.

## Avec la volonté de respecter :

Command Query Responsability Segregation **Architecture**  
Hexagonale **Architecture**  
Domain-Driven **Design**  
Avec pour repère : `https://youtu.be/qBLtZN3p3FU` video de Arnaud Lemaire - PHP Tour 2018

## BDD sqlite3

3 tables : fleet, vehicule, fleet_vehicule  
type de relation entre fleet et vehicule : n-n

## Script de Test

./test.sh`

## Lancement de commande utilisation :

./fleet create <userId> # returns fleetId on the standard output  
./fleet register-vehicule <fleetId> <vehiculePlateNumber>  
./fleet localize-vehicule <fleetId> <vehiculePlateNumber> lat lng
