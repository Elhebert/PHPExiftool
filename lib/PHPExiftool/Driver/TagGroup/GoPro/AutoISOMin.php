<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\GoPro;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AutoISOMin extends AbstractTagGroup
{
    protected string $id = 'GoPro:AutoISOMin';

    protected string $name = 'AutoISOMin';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Auto ISO Min',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : GoPro::GPMF
             * line : 97699
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'GoPro::GPMF.GoPro:AutoISOMin',
            'desc' => [
                'en' => 'Auto ISO Min',
            ],
        ],
    ];

    protected int $count = 0;
}
