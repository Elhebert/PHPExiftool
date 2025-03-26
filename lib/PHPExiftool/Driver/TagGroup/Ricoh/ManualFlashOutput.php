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
class ManualFlashOutput extends AbstractTagGroup
{
    protected string $id = 'Ricoh:ManualFlashOutput';

    protected string $name = 'ManualFlashOutput';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Manual Flash Output',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::Main
             * line : 233575
             * type : rational64s
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::Main.Ricoh:ManualFlashOutput',
            'desc' => [
                'en' => 'Manual Flash Output',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
