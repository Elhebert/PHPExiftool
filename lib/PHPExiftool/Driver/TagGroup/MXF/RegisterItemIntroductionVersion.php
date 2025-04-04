<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RegisterItemIntroductionVersion extends AbstractTagGroup
{
    protected string $id = 'MXF:RegisterItemIntroductionVersion';

    protected string $name = 'RegisterItemIntroductionVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Register Item Introduction Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118501
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:RegisterItemIntroductionVersion',
            'desc' => [
                'en' => 'Register Item Introduction Version',
            ],
        ],
    ];

    protected int $count = 0;
}
