<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioSourceURL extends AbstractTagGroup
{
    protected string $id = 'ASF:AudioSourceURL';

    protected string $name = 'AudioSourceURL';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Audio Source URL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::ExtendedDescr
             * line : 415
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::ExtendedDescr.ASF:AudioSourceURL',
            'desc' => [
                'en' => 'Audio Source URL',
            ],
        ],
    ];

    protected int $count = 0;
}
