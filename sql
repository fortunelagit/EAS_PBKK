/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     10/06/2022 19:33:02                          */
/*==============================================================*/


/*==============================================================*/
/* Table: PEMINJAM                                              */
/*==============================================================*/
create table PEMINJAMS
(
   id                int UNSIGNED not null   comment '',
   P_NAMA            varchar(20) not null  comment '' UNIQUE,
   P_EMAIL           varchar(20) not null  comment '',
   P_NOTEL           varchar(20)  comment '',
   P_PASSWORD        varchar(20) not null  comment '',
   UPDATED_AT        datetime comment '',
   CREATED_AT        datetime comment '',
   primary key (id)
);

/*==============================================================*/
/* Table: SEWA                                                  */
/*==============================================================*/
create table SEWA
(
   S_ID                 int not null  comment '',
   V_ID                 int  comment '',
   P_ID                 int unsigned comment '',
   S_MULAI_SEWA         datetime not null  comment '',
   S_SELESAI_SEWA       datetime not null  comment '',
   S_STATUS_PEMBAYARAN  bool not null  comment '',
   S_STATUS_SEWA        bool not null  comment '',
   UPDATED_AT           datetime comment '',
   CREATED_AT           datetime comment '',
   primary key (S_ID)
);

/*==============================================================*/
/* Table: VENUE                                                 */
/*==============================================================*/
create table VENUE
(
   V_ID                 int not null  comment '',
   V_NAMA               varchar(20) not null  comment '',
   V_ALAMAT             varchar(150) not null  comment '',
   V_HARGA              int not null  comment '',
   V_GAMBAR             varchar(300)  comment '',
   UPDATED_AT           datetime comment '',
   CREATED_AT           datetime comment '',
   primary key (V_ID)
);

alter table SEWA add constraint FK_SEWA_RELATIONS_PEMINJAM foreign key (P_ID)
      references PEMINJAMS (ID) on delete restrict on update restrict;

alter table SEWA add constraint FK_SEWA_RELATIONS_VENUE foreign key (V_ID)
      references VENUE (ID) on delete restrict on update restrict;

