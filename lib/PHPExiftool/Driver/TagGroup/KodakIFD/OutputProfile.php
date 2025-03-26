<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class OutputProfile extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:OutputProfile';

    protected string $name = 'OutputProfile';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Output Profile',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 108314
             * type : undef
             * writable : true
             * count :
             * flags : binary,permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:OutputProfile',
            'desc' => [
                'en' => 'Output Profile',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2054;
}
