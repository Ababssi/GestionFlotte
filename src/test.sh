#!/usr/bin/env bash
# tests
echo 'first launch testing'


./fleet create 1
echo  ' -> SHOULD RETURN "FleetId (autoincrement)"'
./fleet register-vehicule 1 123456
echo  ' -> SHOULD RETURN "Vehicule registered"'
./fleet localize-vehicule 1 123456 48.856614 2.3522219
echo  ' -> SHOULD RETURN "Vehicule parked"'
./fleet register-vehicule 2 123456
echo  ' -> SHOULD RETURN "Fleet not found"'
./fleet register-vehicule 1 123456
echo  ' -> SHOULD RETURN "Vehicle already registered into this fleet"'
./fleet localize-vehicule 1 123456 48.856614 2.3522219
echo  ' -> SHOULD RETURN "Vehicle already parked at this location"'