<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Casio;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AutoISO extends AbstractTagGroup
{
    protected string $id = 'Casio:AutoISO';

    protected string $name = 'AutoISO';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Auto ISO',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Casio::Type2
             * line : 64717
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Casio::Type2.Casio:AutoISO',
            'desc' => [
                'en' => 'Auto ISO',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
