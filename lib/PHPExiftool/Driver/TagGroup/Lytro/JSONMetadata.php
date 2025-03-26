<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Lytro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JSONMetadata extends AbstractTagGroup
{
    protected string $id = 'Lytro:JSONMetadata';

    protected string $name = 'JSONMetadata';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Lytro::Main
             * line : 162395
             * type : ?
             * writable : false
             * count :
             * flags : binary,list
             */
            'id' => 'Lytro::Main.Lytro:JSONMetadata',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 66;
}
