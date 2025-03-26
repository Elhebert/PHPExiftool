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
class GamutBoundaryDescription1 extends AbstractTagGroup
{
    protected string $id = 'ICC_Profile:GamutBoundaryDescription1';

    protected string $name = 'GamutBoundaryDescription1';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Gamut Boundary Description 1',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Main
             * line : 101775
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ICC_Profile::Main.ICC_Profile:GamutBoundaryDescription1',
            'desc' => [
                'en' => 'Gamut Boundary Description 1',
            ],
        ],
    ];

    protected int $count = 0;
}
