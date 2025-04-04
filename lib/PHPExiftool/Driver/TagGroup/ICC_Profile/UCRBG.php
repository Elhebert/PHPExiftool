<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_Profile;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UCRBG extends AbstractTagGroup
{
    protected string $id = 'ICC_Profile:UCRBG';

    protected string $name = 'UCRBG';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Under Color Removal and Black Gen.',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Main
             * line : 101643
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ICC_Profile::Main.ICC_Profile:UCRBG',
            'desc' => [
                'en' => 'Under Color Removal and Black Gen.',
            ],
        ],
    ];

    protected int $count = 0;
}
