<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MacintoshPrintInfo extends AbstractTagGroup
{
    protected string $id = 'Photoshop:MacintoshPrintInfo';

    protected string $name = 'MacintoshPrintInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Macintosh Print Info',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::Main
             * line : 212194
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'Photoshop::Main.Photoshop:MacintoshPrintInfo',
            'desc' => [
                'en' => 'Macintosh Print Info',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
