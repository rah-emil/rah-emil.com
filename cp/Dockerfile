FROM node:20.11-alpine3.19

ARG USER=appuser
ARG USERID=1000

WORKDIR /app

RUN deluser --remove-home node \
&& adduser -u ${USERID} -D ${USER} \
&& chown -R ${USER}:${USER} /app

RUN apk add --no-cache python3 make g++

USER ${USER}

CMD ["tail", "-f", "/dev/null"]
