
*******************************************************************************************************************************************************************
OMAR ELOUAFI

*******************************************************************************************************************************************************************
TP2

*******************************************************************************************************************************************************************
Procédures Stockées

*******************************************************************************************************************************************************************
1)***********************************************************************************************

CREATE OR REPLACE PROCEDURE ajoutPilote
AS
BEGIN
INSERT INTO pilote VALUES('3452','ANDRE',  'NICE'  ,4250,NULL,  '12-DEC-2000');
dbms_output.put_line('pilote cree');
EXCEPTION
when dup_val_on_index then
dbms_output.put_line('error duplicate');
END;



2)***********************************************************************************************

CREATE OR REPLACE PROCEDURE supprimePilote(nbr varchar)
AS
BEGIN
DELETE FROM pilote WHERE nopilot=nbr;
IF SQL%NOTFOUND THEN
dbms_output.put_line('Pilote n’existe pas');
ELSE
dbms_output.put_line('Pilote supprimé avec succès');
END IF;
END;


3)***********************************************************************************************

CREATE OR REPLACE PROCEDURE affichePilote_N(n INTEGER)
IS 
cursor c_pilote is select nom from pilote ORDER BY nom;
         v_pilote pilote%rowtype;
begin
    if  if (n < c_pilote%ROWCOUNT) then
    open c_pilote;
    loop
        fetch c_pilote into v_pilote;
        exit when c_pilote%notfound;   
            dbms_output.put_line('pilote : '||v_pilote.nom);
    end loop;
    else
    dbms_output.put_line('le nombre entrer est plus grand que le nombre des lignes'||c_pilote%ROWCOUNT);
end;



hello,
I didn't understand the other two exercises 
I hope you give us the solutions to these TPs
cordially

