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
class GamutBoundaryDescription2 extends AbstractTagGroup
{
    protected string $id = 'ICC_Profile:GamutBoundaryDescription2';

    protected string $name = 'GamutBoundaryDescription2';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Gamut Boundary Description 2',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Main
             * line : 101778
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ICC_Profile::Main.ICC_Profile:GamutBoundaryDescription2',
            'desc' => [
                'en' => 'Gamut Boundary Description 2',
            ],
        ],
    ];

    protected int $count = 0;
}
