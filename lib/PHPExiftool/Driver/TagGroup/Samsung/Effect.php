<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Effect extends AbstractTagGroup
{
    protected string $id = 'Samsung:Effect';

    protected string $name = 'Effect';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Effect',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::INFO
             * line : 234116
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::INFO.Samsung:Effect',
            'desc' => [
                'en' => 'Effect',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
