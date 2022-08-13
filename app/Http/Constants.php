<?php

/**
 * ===========================================
 * APP ENV constants
 * ===========================================
 */

const APP_ENVIRONMENT_LOCAL = 'local';
const APP_ENVIRONMENT_PRODUCTION = 'production';
const APP_ENVIRONMENT_STAGING = 'staging';
const APP_ENVIRONMENT_TESTING = 'testing';

/**
 * ===========================================
 * HTTP Codes constants
 * ===========================================
 */

const HTTP_STATUS_OK = \Illuminate\Http\Response::HTTP_OK;
const HTTP_STATUS_CREATED = \Illuminate\Http\Response::HTTP_CREATED;
const HTTP_STATUS_BAD_REQUEST = \Illuminate\Http\Response::HTTP_BAD_REQUEST;
const HTTP_STATUS_UNAUTHENTICATED = \Illuminate\Http\Response::HTTP_UNAUTHORIZED;
const HTTP_STATUS_FORBIDDEN = \Illuminate\Http\Response::HTTP_FORBIDDEN;
const HTTP_STATUS_NOT_FOUND = \Illuminate\Http\Response::HTTP_NOT_FOUND;
const HTTP_STATUS_INTERNAL_SERVER_ERROR = \Illuminate\Http\Response::HTTP_INTERNAL_SERVER_ERROR;
const HTTP_STATUS_VALIDATION_ERROR = \Illuminate\Http\Response::HTTP_UNPROCESSABLE_ENTITY;

/**
 * ===========================================
 * Authorization constants
 * ===========================================
 */

const ADMIN_ROLE = 'admin';
const USER_ROLE = 'user';
const DEFAULT_ROLE = USER_ROLE;
const APP_ROLES = [ADMIN_ROLE, USER_ROLE];


/**
 * ===========================================
 * Status constants
 * ===========================================
 */

const PENDING_STATUS = 'pending';
const APPROVED_STATUS = 'approved';
const DECLINED_STATUS = 'declined';
