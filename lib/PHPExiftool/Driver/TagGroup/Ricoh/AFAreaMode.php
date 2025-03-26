<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFAreaMode extends AbstractTagGroup
{
    protected string $id = 'Ricoh:AFAreaMode';

    protected string $name = 'AFAreaMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'AF Area Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::Main
             * line : 233853
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::Main.Ricoh:AFAreaMode',
            'desc' => [
                'en' => 'AF Area Mode',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
