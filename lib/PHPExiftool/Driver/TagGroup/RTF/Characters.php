<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\RTF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Characters extends AbstractTagGroup
{
    protected string $id = 'RTF:Characters';

    protected string $name = 'Characters';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Characters',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : RTF::Main
             * line : 232047
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'RTF::Main.RTF:Characters',
            'desc' => [
                'en' => 'Characters',
            ],
        ],
    ];

    protected int $count = 0;
}
